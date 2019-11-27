<?php
class Report_Model extends CI_Model{

  public function get_expence($company_id,$from_date,$to_date){
    $this->db->select('*');
    $this->db->where("str_to_date(expense_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    $this->db->from('uni_expense');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_receipt($company_id,$from_date,$to_date){
    $this->db->select('*');
    $this->db->where("str_to_date(receipt_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    $this->db->from('uni_receipt');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function opening_expence($company_id,$from_date){
    $this->db->select('SUM(expense_amount) as opening_expence');
    $this->db->where("str_to_date(expense_date,'%d-%m-%Y') < str_to_date('$from_date','%d-%m-%Y')");
    $this->db->from('uni_expense');
    $query = $this->db->get();
    $result = $query->result_array();
    return $result[0]['opening_expence'];
  }

  public function opening_receipt($company_id,$from_date){
    $this->db->select('SUM(receipt_amount) as opening_receipt');
    $this->db->where("str_to_date(receipt_date,'%d-%m-%Y') < str_to_date('$from_date','%d-%m-%Y')");
    $this->db->from('uni_receipt');
    $query = $this->db->get();
    $result = $query->result_array();
    return $result[0]['opening_receipt'];
  }

  // Delivery Challan...
  public function delivery_challan_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('delivery.*, party.*');
    $this->db->from('uni_delivery_master as delivery');
    $this->db->where('delivery.company_id', $company_id);
    $this->db->where("str_to_date(delivery.delivery_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    if($party_id != null){
      $this->db->where('delivery.delivery_party', $party_id);
    }
    $this->db->order_by('delivery.delivery_id', 'ASC');
    $this->db->join('uni_party as party', 'delivery.delivery_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Purchase Report...
  public function purchase_report_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('purchase.*, party.*');
    $this->db->from('uni_purchase_master as purchase');
    $this->db->where('purchase.company_id', $company_id);
    $this->db->where("str_to_date(purchase.purchase_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    if($party_id != null){
      $this->db->where('purchase.purchase_party', $party_id);
    }
    $this->db->order_by('purchase.purchase_id', 'ASC');
    $this->db->join('uni_party as party', 'purchase.purchase_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Purchase Report...
  public function sale_report_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('sale.*, party.*, delivery.*, user.*');
    $this->db->from('uni_sale_master as sale');
    $this->db->where('sale.company_id', $company_id);
    $this->db->where("str_to_date(sale.sale_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    if($party_id != null){
      $this->db->where('sale.sale_party', $party_id);
    }
    $this->db->order_by('sale.sale_id','ASC');
    $this->db->join('uni_party as party', 'sale.sale_party = party.party_id', 'LEFT');
    $this->db->join('uni_delivery_master as delivery', 'sale.sale_challan_no = delivery.delivery_id', 'LEFT');
    $this->db->join('uni_user as user', 'sale.sale_employee = user.user_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Gov Stamping Report...
  public function gov_stamping_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('govt_stamp.*, party.*, division.*');
    $this->db->from('uni_govt_stamp_master as govt_stamp');
    $this->db->where('govt_stamp.company_id', $company_id);
    $this->db->where("str_to_date(govt_stamp.govt_stamp_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    if($party_id != null){
      $this->db->where('govt_stamp.govt_stamp_party', $party_id);
    }
    $this->db->order_by('govt_stamp.govt_stamp_id','ASC');
    $this->db->join('uni_party as party', 'govt_stamp.govt_stamp_party = party.party_id', 'LEFT');
    $this->db->join('uni_division as division', 'govt_stamp.govt_stamp_division = division.division_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Repairy Bill Report...
  public function repairy_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('repairy.*, party.*');
    $this->db->from('uni_repairy_master as repairy');
    $this->db->where('repairy.company_id', $company_id);
    $this->db->where("str_to_date(repairy.repairy_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    if($party_id != null){
      $this->db->where('repairy.repairy_party', $party_id);
    }
    $this->db->order_by('repairy.repairy_id', 'ASC');
    $this->db->join('uni_party as party', 'repairy.repairy_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Quotation Report...
  public function quotation_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('quotation.*, party.*');
    $this->db->from('uni_quotation_master as quotation');
    $this->db->where('quotation.company_id', $company_id);
    $this->db->where("str_to_date(quotation.quotation_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    if($party_id != null){
      $this->db->where('quotation.quotation_party', $party_id);
    }
    $this->db->order_by('quotation.quotation_id', 'ASC');
    $this->db->join('uni_party as party', 'quotation.quotation_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Expense Report...
  public function expense_list($company_id,$from_date,$to_date){
    $this->db->select('*');
    $this->db->from('uni_expense');
    $this->db->where('company_id', $company_id);
    $this->db->where("str_to_date(expense_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    $this->db->order_by('expense_id', 'ASC');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Complaint Report...
  public function complaint_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('complaint.*, party.*');
    $this->db->from('uni_complaint as complaint');
    $this->db->where("str_to_date(complaint.complaint_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    $this->db->where('complaint.company_id', $company_id);
    if($party_id != null){
      $this->db->where('complaint.party_id', $party_id);
    }
    $this->db->join('uni_party as party', 'complaint.party_id = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Service Report...
  public function service_list($company_id,$from_date,$to_date,$party_id){
    $query = $this->db->select('service.*,complaint.*, party.*, user.*,make.*,product.*');
    $this->db->from('uni_service as service');
    $this->db->where("str_to_date(service.service_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    $this->db->where('service.company_id', $company_id);
    if($party_id != null){
      $this->db->where('complaint.party_id', $party_id);
    }
    $this->db->order_by('service.service_id', 'ASC');
    $this->db->join('uni_complaint as complaint', 'service.complaint_id = complaint.complaint_id', 'LEFT');
     $this->db->join('uni_party as party', 'complaint.party_id = party.party_id', 'LEFT');
     $this->db->join('uni_user as user', 'complaint.complaint_engeeneer = user.user_id', 'LEFT');
     $this->db->join('uni_make as make', 'service.make_id = make.make_id', 'LEFT');
     $this->db->join('uni_product as product', 'service.model_no = product.product_id', 'LEFT');
     $query = $this->db->get();
     $result = $query->result();
     return $result;
  }

  // Recipt Report...
  public function receipt_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('receipt.*, party.*');
    $this->db->from('uni_receipt as receipt');
    $this->db->where("str_to_date(receipt.receipt_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    $this->db->where('receipt.company_id', $company_id);
    if($party_id != null){
      $this->db->where('receipt.receipt_party', $party_id);
    }
    $this->db->order_by('receipt.receipt_id', 'DESC');
    $this->db->join('uni_party as party', 'receipt.receipt_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Enquiry Report...
  public function enquiry_list($company_id,$from_date,$to_date,$party_id){
    $this->db->select('enquiry.*,party.*');
    $this->db->from('uni_enquiry as enquiry');
    $this->db->where("str_to_date(enquiry.enquiry_date,'%d-%m-%Y') BETWEEN str_to_date('$from_date','%d-%m-%Y') AND str_to_date('$to_date','%d-%m-%Y')");
    $this->db->where('enquiry.company_id', $company_id);
    if($party_id != null){
      $this->db->where('enquiry.party_id', $party_id);
    }
    $this->db->order_by('enquiry.enquiry_id', 'DESC');
    $this->db->join('uni_party as party', 'enquiry.party_id = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

}



?>
