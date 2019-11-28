<?php
class Admin_Model extends CI_Model{

  public function save_data($tbl_name, $data){
    $this->db->insert($tbl_name, $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }

  public function get_list($company_id,$id,$order,$tbl_name){
    $query = $this->db->select('*')
            ->where('company_id', $company_id)
            ->order_by($id, $order)
            ->from($tbl_name)
            ->get();
    $result = $query->result();
    return $result;
  }

  public function get_info($id_type, $id, $tbl_name){
    $query = $this->db->select('*')
            ->where($id_type, $id)
            ->from($tbl_name)
            ->get();
    $result = $query->result();
    return $result;
  }

  public function update_info($id_type, $id, $tbl_name, $data){
    $this->db->where($id_type, $id)
    ->update($tbl_name, $data);
  }

  public function delete_info($id_type, $id, $tbl_name){
    $this->db->where($id_type, $id)
    ->delete($tbl_name);
  }

  public function get_count($party,$party_id,$id_type,$company_id,$tbl_name){
    $this->db->select($id_type);
    $this->db->where('company_id', $company_id);
    if($party_id != null && $party != null){
      $this->db->where($party, $party_id);
    }
    $this->db->from($tbl_name);
    $query = $this->db->get();
    $result = $query->num_rows();
    return $result;
  }

  public function check_duplication($company_id,$value,$field_name,$table_name){
    $query = $this->db->select($field_name)
      ->where('company_id', $company_id)
      ->where($field_name,$value)
      ->from($table_name)
      ->get();
    $result = $query->num_rows();
    return $result;
  }

  public function get_product_list($company_id){
    $query = $this->db->select('make.*, product.*')
    ->from('uni_product as product')
    ->where('product.company_id', $company_id)
     ->join('uni_make as make', 'product.make_id = make.make_id', 'LEFT')
     ->get();
     $result = $query->result();
     return $result;
  }

  public function get_product_info($id){
    $query = $this->db->select('make.*, product.*, capacity.*, accuracy.*, class.*, platter.*, ')
            ->from('uni_product as product')
            ->where('product.product_id', $id)
            ->join('uni_make as make', 'product.make_id = make.make_id', 'LEFT')
            ->join('uni_capacity as capacity', 'product.capacity_id = capacity.capacity_id', 'LEFT')
            ->join('uni_accuracy as accuracy', 'product.accuracy_id = accuracy.accuracy_id', 'LEFT')
            ->join('uni_class as class', 'product.class_id = class.class_id', 'LEFT')
            ->join('uni_platter_size as platter', 'product.platter_id = platter.platter_id', 'LEFT')
            ->get();
            $result = $query->result();
            return $result;
  }

  public function get_party_list($company_id){
    $query = $this->db->select('*')
        ->where('company_id', $company_id)
        ->where('party_type', 'party')
        ->from('uni_party')
        ->get();
    $result = $query->result();
    return $result;
  }

  public function get_enquiry_count($party_id,$company_id){
    $this->db->select('enquiry_id');
    $this->db->where('company_id', $company_id);
    if($party_id != null){
      $this->db->where('party_id', $party_id);
    }
    $this->db->where('enquiry_status', 'active');
    $this->db->from('uni_enquiry');
    $query = $this->db->get();
    $result = $query->num_rows();
    return $result;
  }
  public function get_complaint_count($party_id,$company_id){
    $this->db->select('complaint_id');
    $this->db->where('company_id', $company_id);
    if($party_id != null){
      $this->db->where('party_id', $party_id);
    }
    $this->db->where('complaint_status', 'open');
    $this->db->from('uni_complaint');
    $query = $this->db->get();
    $result = $query->num_rows();
    return $result;
  }
}
?>
