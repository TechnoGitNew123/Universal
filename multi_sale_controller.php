public function get_challan_sale(){
  $company_id = $this->session->userdata('company_id');
  if($company_id){
    $challan_id = $this->input->post("challan_id");
    if(!empty($challan_id)){
      foreach ($challan_id as $k) {
        $delivery_challan_data = $this->Transaction_Model->delivery_challan_trans_data($k);
        foreach ($delivery_challan_data as $challan_data) {
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $data['make_id'] = $challan_data->make_id;
          $data['make_name'] = $challan_data->make_name;
          $data['model_no_id'] = $challan_data->model_no_id;
          $data['product_model_no'] = $challan_data->product_model_no;
          $data['machine_serial_no'] = $challan_data->machine_serial_no;
          $data['capacity_id'] = $challan_data->capacity_id;
          $data['capacity_name'] = $challan_data->capacity_name;
          $data['accuracy_id'] = $challan_data->accuracy_id;
          $data['accuracy_name'] = $challan_data->accuracy_name;
          $data['class_id'] = $challan_data->class_id;
          $data['class_name'] = $challan_data->class_name;
          $data['platter_id'] = $challan_data->platter_id;
          $data['platter_size'] = $challan_data->platter_size;
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $data['delivery_trans_id'] = $challan_data->delivery_trans_id;
          $del_data[] = $data;
        }
      }
    }
    echo json_encode($del_data);
  } else{
    header('location:'.base_url().'Login');
  }
}
