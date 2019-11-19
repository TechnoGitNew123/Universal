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

  public function get_enquiry_list($company_id){
    $query = $this->db->select('*')
        ->where('company_id', $company_id)
        ->where('party_type', 'enquiry')
        ->from('uni_party')
        ->get();
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
  public function delivery_challan_list($company_id){
    $query = $this->db->select('delivery.*, party.*')
        ->from('uni_delivery_master as delivery')
        ->where('delivery.company_id', $company_id)
        ->join('uni_party as party', 'delivery.delivery_party = party.party_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }
  // Get Delivery Challan Data...
  public function delivery_challan_data($company_id,$delivery_id){
    $query = $this->db->select('delivery.*, party.*')
        ->from('uni_delivery_master as delivery')
        ->where('delivery.company_id', $company_id)
        ->where('delivery.delivery_id', $delivery_id)
        ->join('uni_party as party', 'delivery.delivery_party = party.party_id', 'LEFT')
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
  public function purchase_agrement_list($company_id){
    $query = $this->db->select('purchase.*, party.*')
        ->from('uni_purchase_master as purchase')
        ->where('purchase.company_id', $company_id)
        ->join('uni_party as party', 'purchase.purchase_party = party.party_id', 'LEFT')
        ->get();
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
  public function sale_bill_list($company_id){
    $query = $this->db->select('sale.*, party.*, delivery.*, user.*')
        ->from('uni_sale_master as sale')
        ->where('sale.company_id', $company_id)
        ->join('uni_party as party', 'sale.sale_party = party.party_id', 'LEFT')
        ->join('uni_delivery_master as delivery', 'sale.sale_challan_no = delivery.delivery_id', 'LEFT')
        ->join('uni_user as user', 'sale.sale_employee = user.user_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }
  // Get Dellivery list depend on Party...
  public function GetSaleDelivery($party_id){
    $query = $this->db->select('*')
        ->where('delivery_party', $party_id)
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
  public function govt_stamp_list($company_id){
    $query = $this->db->select('govt_stamp.*, party.*, division.*')
        ->from('uni_govt_stamp_master as govt_stamp')
        ->where('govt_stamp.company_id', $company_id)
        ->join('uni_party as party', 'govt_stamp.govt_stamp_party = party.party_id', 'LEFT')
        ->join('uni_division as division', 'govt_stamp.govt_stamp_division = division.division_id', 'LEFT')
        ->get();
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
    $query = $this->db->select('govt_stamp.*,make.*,capacity.*, accuracy.*, class.*, min.*')
        ->from('uni_govt_stamp_trans as govt_stamp')
        ->where('govt_stamp.govt_stamp_id', $govt_stamp_id)
        ->join('uni_make as make', 'govt_stamp.make_id = make.make_id', 'LEFT')
        ->join('uni_capacity as capacity', 'govt_stamp.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'govt_stamp.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'govt_stamp.class_id = class.class_id', 'LEFT')
        ->join('uni_min as min', 'govt_stamp.min_id = min.min_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  public function repairy_bill_listt($company_id){
    $query = $this->db->select('repairy.*, party.*')
        ->from('uni_repairy_master as repairy')
        ->where('repairy.company_id', $company_id)
        ->join('uni_party as party', 'repairy.repairy_party = party.party_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }
  // Repairy Bill Data...
  public function repairy_bill_data($company_id,$repairy_id){
    $query = $this->db->select('repairy.*, party.*')
        ->from('uni_repairy_master as repairy')
        ->where('repairy.company_id', $company_id)
        ->where('repairy.repairy_id', $repairy_id)
        ->join('uni_party as party', 'repairy.repairy_party = party.party_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }

  public function repairy_bill_trans_data($repairy_id){
    $query = $this->db->select('repairy.*,make.*,capacity.*, accuracy.*, class.*')
        ->from('uni_repairy_trans as repairy')
        ->where('repairy.repairy_id', $repairy_id)
        ->join('uni_make as make', 'repairy.make_id = make.make_id', 'LEFT')
        ->join('uni_capacity as capacity', 'repairy.capacity_id = capacity.capacity_id', 'LEFT')
        ->join('uni_accuracy as accuracy', 'repairy.accuracy_id = accuracy.accuracy_id', 'LEFT')
        ->join('uni_class as class', 'repairy.class_id = class.class_id', 'LEFT')
        ->get();
    $result = $query->result();
    return $result;
  }
}

?>
