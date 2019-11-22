<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receipt extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_Model');
    $this->load->model('Transaction_Model');
  }

 public function delivery_challan_print($delivery_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }

     $data['delivery_challan_data'] = $this->Transaction_Model->delivery_challan_data($company_id,$delivery_id);
     $data['challan_trans_data'] = $this->Transaction_Model->delivery_challan_trans_data($delivery_id);
     $this->load->view('Admin/delivery_challan_receipt',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function print_delivery_challan($delivery_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }
     $data['delivery_challan_data'] = $this->Transaction_Model->delivery_challan_data($company_id,$delivery_id);
     $data['challan_trans_data'] = $this->Transaction_Model->delivery_challan_trans_data($delivery_id);
     $this->load->view('Admin/delivery_challan_receipt_print',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function stamping_receipt($govt_stamp_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }
     $data['govt_stamp_data'] = $this->Transaction_Model->govt_stamp_data($company_id,$govt_stamp_id);
     $data['govt_stamp_trans_data'] = $this->Transaction_Model->govt_stamp_trans_data($govt_stamp_id);
     $this->load->view('Admin/stamping_receipt',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function print_stamping_receipt($govt_stamp_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }
     $data['govt_stamp_data'] = $this->Transaction_Model->govt_stamp_data($company_id,$govt_stamp_id);
     $data['govt_stamp_trans_data'] = $this->Transaction_Model->govt_stamp_trans_data($govt_stamp_id);
     $this->load->view('Admin/stamping_receipt_print',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function cash_memo($govt_stamp_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }
     $data['govt_stamp_data'] = $this->Transaction_Model->govt_stamp_data($company_id,$govt_stamp_id);
     $data['govt_stamp_trans_data'] = $this->Transaction_Model->govt_stamp_trans_data($govt_stamp_id);
     $this->load->view('Admin/cash_memo',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function cash_memo_print($govt_stamp_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }
     $data['govt_stamp_data'] = $this->Transaction_Model->govt_stamp_data($company_id,$govt_stamp_id);
     $data['govt_stamp_trans_data'] = $this->Transaction_Model->govt_stamp_trans_data($govt_stamp_id);
     $this->load->view('Admin/cash_memo_print',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function repairy_bill_receipt($repairy_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }

     $data['repairy_bill_data'] = $this->Transaction_Model->repairy_bill_data($company_id,$repairy_id);
     $data['repairy_bill_trans_data'] = $this->Transaction_Model->repairy_bill_trans_data($repairy_id);
     $this->load->view('Admin/repairy_bill_receipt',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function repairy_bill_print($repairy_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }

     $data['repairy_bill_data'] = $this->Transaction_Model->repairy_bill_data($company_id,$repairy_id);
     $data['repairy_bill_trans_data'] = $this->Transaction_Model->repairy_bill_trans_data($repairy_id);
     $this->load->view('Admin/repairy_bill_print',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function quotation_receipt($quotation_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }

     $data['quotation_data'] = $this->Transaction_Model->quotation_data($company_id,$quotation_id);
     $data['quotation_trans_data'] = $this->Transaction_Model->quotation_trans_data($quotation_id);
     $this->load->view('Admin/quotation_receipt',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function quotation_receipt_print($quotation_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }

     $data['quotation_data'] = $this->Transaction_Model->quotation_data($company_id,$quotation_id);
     $data['quotation_trans_data'] = $this->Transaction_Model->quotation_trans_data($quotation_id);
     $this->load->view('Admin/quotation_print',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }


 public function purchase_agrement_receipt($purchase_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }

     $data['purchase_agreement_data'] = $this->Transaction_Model->purchase_agreement_data($company_id,$purchase_id);
     $data['purchase_trans_data'] = $this->Transaction_Model->purchase_trans_data($purchase_id);
     $this->load->view('Admin/purchase_agriment_receipt',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function purchase_agrement_print($purchase_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
     foreach ($company_info as $company_info) {
       $data['company_name'] = $company_info->company_name;
       $data['company_address'] = $company_info->company_address;
       $data['company_city'] = $company_info->company_city;
       $data['company_district'] = $company_info->company_district;
       $data['company_state'] = $company_info->company_state;
       $data['company_pincode'] = $company_info->company_pincode;
       $data['company_mob1'] = $company_info->company_mob1;
       $data['company_mob2'] = $company_info->company_mob2;
       $data['company_email'] = $company_info->company_email;
       $data['company_website'] = $company_info->company_website;
     }

     $data['purchase_agreement_data'] = $this->Transaction_Model->purchase_agreement_data($company_id,$purchase_id);
     $data['purchase_trans_data'] = $this->Transaction_Model->purchase_trans_data($purchase_id);
     $this->load->view('Admin/purchase_agriment_print',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 public function service_report($service_id){
     $company_id = $this->session->userdata('company_id');
     if($company_id){
       $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
       foreach ($company_info as $company_info) {
         $data['company_name'] = $company_info->company_name;
         $data['company_address'] = $company_info->company_address;
         $data['company_city'] = $company_info->company_city;
         $data['company_district'] = $company_info->company_district;
         $data['company_state'] = $company_info->company_state;
         $data['company_pincode'] = $company_info->company_pincode;
         $data['company_mob1'] = $company_info->company_mob1;
         $data['company_mob2'] = $company_info->company_mob2;
         $data['company_email'] = $company_info->company_email;
         $data['company_website'] = $company_info->company_website;
       }

       $service_info = $this->Transaction_Model->service_report_data($service_id);
       foreach($service_info as $info){
         $data['complaint_id'] = $info->complaint_id;
         $data['complaint_no'] = $info->complaint_no;
         $data['complaint_date'] = $info->complaint_date;
         $data['party_id'] = $info->party_id;
         $data['party_firm'] = $info->party_firm;
         $data['party_address'] = $info->party_address;
         $data['party_mob1'] = $info->party_mob1;
         $data['complaint_service'] = $info->complaint_service;
         $data['complaint_reporting'] = $info->complaint_reporting;
         $data['complaint_person'] = $info->complaint_person;
         $data['complaint_contact_no'] = $info->complaint_contact_no;
         $data['complaint_engeeneer'] = $info->complaint_engeeneer;

         $data['user_name'] = $info->user_name;
         $data['user_mobile'] = $info->user_mobile;

         $data['service_no'] = $info->service_no;
         $data['service_id'] = $info->service_id;
         $data['service_date'] = $info->service_date;
         $data['make_id'] = $info->make_id;
         $data['make_name'] = $info->make_name;
         $data['model_no'] = $info->model_no;
         $data['product_model_no'] = $info->product_model_no;
         $data['service_sr_no'] = $info->service_sr_no;
         $data['service_range'] = $info->service_range;
         $data['service_stamping'] = $info->service_stamping;
         $data['service_observation'] = $info->service_observation;
         $data['service_recommend'] = $info->service_recommend;
         $data['service_component'] = $info->service_component;
         $data['service_call_completion'] = $info->service_call_completion;
         $data['service_charges_fee'] = $info->service_charges_fee;
         $data['service_date'] = $info->service_date;
         $data['service_time_in'] = $info->service_time_in;
         $data['service_time_out'] = $info->service_time_out;
       }
       $this->load->view('Admin/service_report_receipt',$data);
     } else{
       header('location:'.base_url().'Login');
     }
 }

 public function service_report_print(){
   $this->load->view('Admin/service_report_print');
 }
}
