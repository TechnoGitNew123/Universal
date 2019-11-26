<?php
class Transaction_Model extends CI_Model{
  public function get_count_no($company_id, $field_name, $tbl_name){
    $query = $this->db->select('MAX('.$field_name.') as num')
    ->where('company_id', $company_id)
    ->from($tbl_name)
    ->get();
    $result =  $query->result_array();
    if($result){
      $old_num = $result[0]['num'];
    } else{
      $old_num = 0;
    }

    // $value2 = substr($newresult, 10, 13);                  //separating numeric part
    $value2 = $old_num + 1;                            //Incrementing numeric part
    $value2 = "" . sprintf('%06s', $value2);               //concatenating incremented value
    return $value = $value2;
  }

  public function get_complaint_list($company_id){
    $query = $this->db->select('complaint.*, party.*')
    ->from('uni_complaint as complaint')
    ->where('complaint.company_id', $company_id)
     ->join('uni_party as party', 'complaint.party_id = party.party_id', 'LEFT')
     ->get();
     $result = $query->result();
     return $result;
  }

  public function get_complaint_info($company_id, $id){
    $query = $this->db->select('complaint.*, party.*, user.*')
    ->from('uni_complaint as complaint')
    ->where('complaint.company_id', $company_id)
    ->where('complaint.complaint_id', $id)
     ->join('uni_party as party', 'complaint.party_id = party.party_id', 'LEFT')
     ->join('uni_user as user', 'complaint.complaint_engeeneer = user.user_id', 'LEFT')
     ->get();
     $result = $query->result();
     return $result;
  }

  // Get Enquiry List...
  public function get_enquiry_list($company_id,$party_id){
    $this->db->select('enquiry.*,party.*');
    $this->db->from('uni_enquiry as enquiry');
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

  // Get Enquiry Info...
  public function get_enquiry_details($enquiry_id){
    $this->db->select('enquiry.*,party.*');
    $this->db->from('uni_enquiry as enquiry');
    $this->db->where('enquiry.enquiry_id', $enquiry_id);
    $this->db->join('uni_party as party', 'enquiry.party_id = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }


  public function GetProduct($make_id){
    $query = $this->db->select('*')
        ->where('make_id', $make_id)
        ->from('uni_product')
        ->get();
    $result = $query->result();
    return $result;
  }

  public function GetProductDetails($product_id){
    $query = $this->db->select('product.*, capacity.*, accuracy.*, class.*, platter.*')
        ->from('uni_product as product')
        ->where('product.product_id', $product_id)
        ->join('uni_capacity as capacity', 'product.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'product.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'product.class_id = class.class_id', 'LEFT')
        ->join('uni_platter_size as platter', 'product.platter_id = platter.platter_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }
  // Get Delivery Challan List...
  public function delivery_challan_list($company_id,$party_id){
    $this->db->select('delivery.*, party.*');
    $this->db->from('uni_delivery_master as delivery');
    $this->db->where('delivery.company_id', $company_id);
    if($party_id != null){
      $this->db->where('delivery.delivery_party', $party_id);
    }
    $this->db->order_by('delivery.delivery_id', 'DESC');
    $this->db->join('uni_party as party', 'delivery.delivery_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Get Delivery Challan Data...
  public function delivery_challan_data($company_id,$delivery_id){
    $query = $this->db->select('delivery.*, party.*, user.*')
        ->from('uni_delivery_master as delivery')
        ->where('delivery.company_id', $company_id)
        ->where('delivery.delivery_id', $delivery_id)
        ->join('uni_party as party', 'delivery.delivery_party = party.party_id', 'LEFT')
        ->join('uni_user as user', 'delivery.delivery_user = user.user_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  public function delivery_challan_trans_data($delivery_id){
    $query = $this->db->select('delivery.*,make.*,product.*, capacity.*, accuracy.*, class.*, platter.*')
        ->from('uni_delivery_trans as delivery')
        ->where('delivery.delivery_id', $delivery_id)
        ->join('uni_make as make', 'delivery.make_id = make.make_id', 'LEFT')
        ->join('uni_product as product', 'delivery.model_no_id = product.product_id', 'LEFT')
        ->join('uni_capacity as capacity', 'delivery.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'delivery.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'delivery.class_id = class.class_id', 'LEFT')
        ->join('uni_platter_size as platter', 'delivery.platter_id = platter.platter_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  // Purchase Agreement List...
  public function purchase_agrement_list($company_id,$party_id){
    $this->db->select('purchase.*, party.*');
    $this->db->from('uni_purchase_master as purchase');
    $this->db->where('purchase.company_id', $company_id);
    if($party_id != null){
      $this->db->where('purchase.purchase_party', $party_id);
    }
    $this->db->order_by('purchase.purchase_id', 'DESC');
    $this->db->join('uni_party as party', 'purchase.purchase_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  // Get Delivery Challan Data...
  public function purchase_agreement_data($company_id,$purchase_id){
    $query = $this->db->select('purchase.*, party.*')
        ->from('uni_purchase_master as purchase')
        ->where('purchase.company_id', $company_id)
        ->where('purchase.purchase_id', $purchase_id)
        ->join('uni_party as party', 'purchase.purchase_party = party.party_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }
  // Purchase Transaction Data...
  public function purchase_trans_data($purchase_id){
    $query = $this->db->select('purchase.*,make.*,product.*, capacity.*, accuracy.*, class.*, platter.*,display.*,cabinate.*')
        ->from('uni_purchase_trans as purchase')
        ->where('purchase.purchase_id', $purchase_id)
        ->join('uni_make as make', 'purchase.make_id = make.make_id', 'LEFT')
        ->join('uni_product as product', 'purchase.model_no_id = product.product_id', 'LEFT')
        ->join('uni_capacity as capacity', 'purchase.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'purchase.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'purchase.class_id = class.class_id', 'LEFT')
        ->join('uni_platter_size as platter', 'purchase.platter_id = platter.platter_id', 'LEFT')
        ->join('uni_display_color as display', 'purchase.display_color_id = display.display_color_id', 'LEFT')
        ->join('uni_cabinet_color as cabinate', 'purchase.cabinate_color_id = cabinate.cabinet_color_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  /**************************** Sale Bill *********************/
  // Sale Bill List...
  public function sale_bill_list($company_id,$party_id){
    $this->db->select('sale.*, party.*, delivery.*, user.*');
    $this->db->from('uni_sale_master as sale');
    $this->db->where('sale.company_id', $company_id);
    if($party_id != null){
      $this->db->where('sale.sale_party', $party_id);
    }
    $this->db->order_by('sale.sale_id','DESC');
    $this->db->join('uni_party as party', 'sale.sale_party = party.party_id', 'LEFT');
    $this->db->join('uni_delivery_master as delivery', 'sale.sale_challan_no = delivery.delivery_id', 'LEFT');
    $this->db->join('uni_user as user', 'sale.sale_employee = user.user_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  // Get Dellivery list depend on Party...
  public function GetSaleDelivery($party_id){
    $query = $this->db->select('*')
        ->where('delivery_party', $party_id)
        ->where('delivery_bill_status', 'no')
        ->from('uni_delivery_master')
        ->get();
    $result = $query->result();
    return $result;
  }
  // Get Delivery Challan Data...
  public function sale_bill_data($company_id,$sale_id){
    $query = $this->db->select('sale.*, party.*,delivery.*,user.*')
        ->from('uni_sale_master as sale')
        ->where('sale.company_id', $company_id)
        ->where('sale.sale_id', $sale_id)
        ->join('uni_party as party', 'sale.sale_party = party.party_id', 'LEFT')
        ->join('uni_delivery_master as delivery', 'sale.sale_challan_no = delivery.delivery_id', 'LEFT')
        ->join('uni_user as user', 'sale.sale_employee = user.user_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  public function sale_trans_data($sale_id){
    $query = $this->db->select('sale.*,make.*,product.*, capacity.*, accuracy.*, class.*, platter.*')
        ->from('uni_sale_trans as sale')
        ->where('sale.sale_id', $sale_id)
        ->join('uni_make as make', 'sale.make_id = make.make_id', 'LEFT')
        ->join('uni_product as product', 'sale.model_no_id = product.product_id', 'LEFT')
        ->join('uni_capacity as capacity', 'sale.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'sale.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'sale.class_id = class.class_id', 'LEFT')
        ->join('uni_platter_size as platter', 'sale.platter_id = platter.platter_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  /**************************** Gov Stammping *********************/
  // Save Gov Stammping...
  public function govt_stamp_list($company_id,$party_id){
    $this->db->select('govt_stamp.*, party.*, division.*');
    $this->db->from('uni_govt_stamp_master as govt_stamp');
    $this->db->where('govt_stamp.company_id', $company_id);
    if($party_id != null){
      $this->db->where('govt_stamp.govt_stamp_party', $party_id);
    }
    $this->db->order_by('govt_stamp.govt_stamp_id','DESC');
    $this->db->join('uni_party as party', 'govt_stamp.govt_stamp_party = party.party_id', 'LEFT');
    $this->db->join('uni_division as division', 'govt_stamp.govt_stamp_division = division.division_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  // Gov Stammping Data...
  public function govt_stamp_data($company_id,$govt_stamp_id){
    $query = $this->db->select('govt_stamp.*, party.*,division.*')
        ->from('uni_govt_stamp_master as govt_stamp')
        ->where('govt_stamp.company_id', $company_id)
        ->where('govt_stamp.govt_stamp_id', $govt_stamp_id)
        ->join('uni_party as party', 'govt_stamp.govt_stamp_party = party.party_id', 'LEFT')
        ->join('uni_division as division', 'govt_stamp.govt_stamp_division = division.division_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }
  // Gov Stamping Transaction Data...
  public function govt_stamp_trans_data($govt_stamp_id){
    $query = $this->db->select('govt_stamp.*,make.*,capacity.*, accuracy.*, class.*, min.*,product.*')
        ->from('uni_govt_stamp_trans as govt_stamp')
        ->where('govt_stamp.govt_stamp_id', $govt_stamp_id)
        ->join('uni_make as make', 'govt_stamp.make_id = make.make_id', 'LEFT')
        ->join('uni_capacity as capacity', 'govt_stamp.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'govt_stamp.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'govt_stamp.class_id = class.class_id', 'LEFT')
        ->join('uni_min as min', 'govt_stamp.min_id = min.min_id', 'LEFT')
        ->join('uni_product as product', 'govt_stamp.model_no_id = product.product_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  public function repairy_bill_list($company_id, $party_id){
    $this->db->select('repairy.*, party.*');
    $this->db->from('uni_repairy_master as repairy');
    $this->db->where('repairy.company_id', $company_id);
    if($party_id != null){
      $this->db->where('repairy.repairy_party', $party_id);
    }
    $this->db->order_by('repairy.repairy_id', 'DESC');
    $this->db->join('uni_party as party', 'repairy.repairy_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  // Repairy Bill Data...
  public function repairy_bill_data($company_id,$repairy_id){
    $query = $this->db->select('repairy.*, party.*,user.*')
        ->from('uni_repairy_master as repairy')
        ->where('repairy.company_id', $company_id)
        ->where('repairy.repairy_id', $repairy_id)
        ->join('uni_party as party', 'repairy.repairy_party = party.party_id', 'LEFT')
        ->join('uni_user as user', 'repairy.repairy_user = user.user_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  public function repairy_bill_trans_data($repairy_id){
    $query = $this->db->select('repairy.*,make.*,capacity.*, accuracy.*, class.*,product.*')
        ->from('uni_repairy_trans as repairy')
        ->where('repairy.repairy_id', $repairy_id)
        ->join('uni_make as make', 'repairy.make_id = make.make_id', 'LEFT')
        ->join('uni_capacity as capacity', 'repairy.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'repairy.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'repairy.class_id = class.class_id', 'LEFT')
        ->join('uni_product as product', 'repairy.model_no_id = product.product_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  /************************ Quotation **********************/
  // Quotation List...
  public function quotation_list($company_id,$party_id){
    $this->db->select('quotation.*, party.*');
    $this->db->from('uni_quotation_master as quotation');
    $this->db->where('quotation.company_id', $company_id);
    if($party_id != null){
      $this->db->where('quotation.quotation_party', $party_id);
    }
    $this->db->order_by('quotation.quotation_id', 'DESC');
    $this->db->join('uni_party as party', 'quotation.quotation_party = party.party_id', 'LEFT');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  // Quotation Data...
  public function quotation_data($company_id,$quotation_id){
    $query = $this->db->select('quotation.*, party.*')
        ->from('uni_quotation_master as quotation')
        ->where('quotation.company_id', $company_id)
        ->where('quotation.quotation_id', $quotation_id)
        ->join('uni_party as party', 'quotation.quotation_party = party.party_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }
  // Quotation Transe Data...
  public function quotation_trans_data($quotation_id){
    $query = $this->db->select('quotation.*,make.*,product.*,capacity.*, accuracy.*, class.*,platter.*')
        ->from('uni_quotation_trans as quotation')
        ->where('quotation.quotation_id', $quotation_id)
        ->join('uni_make as make', 'quotation.make_id = make.make_id', 'LEFT')
        ->join('uni_product as product', 'quotation.model_no_id = product.product_id', 'LEFT')
        ->join('uni_capacity as capacity', 'quotation.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'quotation.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'quotation.class_id = class.class_id', 'LEFT')
        ->join('uni_platter_size as platter', 'quotation.platter_id = platter.platter_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

// Service Report
  public function get_service_report_list($company_id){
    $query = $this->db->select('service.*,complaint.*, party.*, user.*,make.*,product.*')
    ->from('uni_service as service')
    ->where('service.company_id', $company_id)
    ->order_by('service.service_id', 'DESC')
    ->join('uni_complaint as complaint', 'service.complaint_id = complaint.complaint_id', 'LEFT')
     ->join('uni_party as party', 'complaint.party_id = party.party_id', 'LEFT')
     ->join('uni_user as user', 'complaint.complaint_engeeneer = user.user_id', 'LEFT')
     ->join('uni_make as make', 'service.make_id = make.make_id', 'LEFT')
     ->join('uni_product as product', 'service.model_no = product.product_id', 'LEFT')
     ->get();
     $result = $query->result();
     return $result;
  }

  public function service_report_data($service_id){
    $query = $this->db->select('service.*,complaint.*, party.*, user.*,make.*,product.*')
    ->from('uni_service as service')
    ->where('service.service_id', $service_id)
    ->join('uni_complaint as complaint', 'service.complaint_id = complaint.complaint_id', 'LEFT')
     ->join('uni_party as party', 'complaint.party_id = party.party_id', 'LEFT')
     ->join('uni_user as user', 'complaint.complaint_engeeneer = user.user_id', 'LEFT')
     ->join('uni_make as make', 'service.make_id = make.make_id', 'LEFT')
     ->join('uni_product as product', 'service.model_no = product.product_id', 'LEFT')
     ->get();
     $result = $query->result();
     return $result;
  }


  // Reciept List...
  public function receipt_list($company_id,$party_id){
    $this->db->select('receipt.*, party.*');
    $this->db->from('uni_receipt as receipt');
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

  public function receipt_details($receipt_id){
    $query = $this->db->select('receipt.*, party.*')
        ->from('uni_receipt as receipt')
        ->where('receipt.receipt_id', $receipt_id)
        ->join('uni_party as party', 'receipt.receipt_party = party.party_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }


  public function total_sale_amount($party_id){
    $query = $this->db->select('SUM(sale_total) as total_sale_amount')
              ->where('sale_party',$party_id)
              ->from('uni_sale_master')
              ->get();
    $result = $query->result_array();
    $total_sale_amount = $result[0]['total_sale_amount'];
    return $total_sale_amount;
  }

  public function total_stamping_amount($party_id){
    $query = $this->db->select('SUM(govt_stamp_total) as total_stamping_amount')
              ->where('govt_stamp_party',$party_id)
              ->from('uni_govt_stamp_master')
              ->get();
    $result = $query->result_array();
    $total_sale_amount = $result[0]['total_stamping_amount'];
    return $total_sale_amount;
  }

  public function total_repairy_amount($party_id){
    $query = $this->db->select('SUM(repairy_total) as total_repairy_amount')
              ->where('repairy_party',$party_id)
              ->from('uni_repairy_master')
              ->get();
    $result = $query->result_array();
    $total_sale_amount = $result[0]['total_repairy_amount'];
    return $total_sale_amount;
  }

  public function total_service_amount($party_id){
    $query = $this->db->select('SUM(service.service_charges_fee) as total_service_amount')
        ->from('uni_complaint as complaint')
        ->where('complaint.party_id',$party_id)
        ->join('uni_service as service', 'complaint.complaint_id = service.complaint_id', 'LEFT')
        ->get();
        $result = $query->result_array();
        $total_sale_amount = $result[0]['total_service_amount'];
        return $total_sale_amount;
  }

  public function total_reciept_amount($party_id){
    $query = $this->db->select('SUM(receipt_amount) as total_reciept_amount')
              ->where('receipt_party',$party_id)
              ->from('uni_receipt')
              ->get();
    $result = $query->result_array();
    $total_sale_amount = $result[0]['total_reciept_amount'];
    return $total_sale_amount;
  }

  public function GetPartyDetails($party_id){
    $query = $this->db->select('*')
        ->where('party_id', $party_id)
        ->from('uni_party')
        ->get();
    $result = $query->result();
    return $result;
  }

}

?>
