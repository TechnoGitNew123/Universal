<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_Model');
    $this->load->model('Transaction_Model');
  }
  // Transaction...

  /********************** Enquiry *************************/
  // Enquiry List...
  public function enquiry_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['enquiry_list'] = $this->Transaction_Model->get_enquiry_list($company_id);
      $this->load->view('Admin/enquiry_list', $data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Add Enquiry...
  public function add_enquiry(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/add_enquiry');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Save Enquiry...
  public function save_enquiry(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'party_firm' => $this->input->post('party_firm'),
        'party_address' => $this->input->post('party_address'),
        'party_area' => $this->input->post('party_area'),
        'party_taluka' => $this->input->post('party_taluka'),
        'party_district' => $this->input->post('party_district'),
        'party_pin' => $this->input->post('party_pin'),
        'party_mob1' => $this->input->post('party_mob1'),
        'party_mob2' => $this->input->post('party_mob2'),
        'party_email' => $this->input->post('party_email'),
        'party_website' => $this->input->post('party_website'),
        'party_gst_no' => $this->input->post('party_gst_no'),
        'party_pan_no' => $this->input->post('party_pan_no'),
        'party_business' => $this->input->post('party_business'),
        'party_type' => 'enquiry',
      );
      $this->Admin_Model->save_data('uni_party', $data);
      header('location:enquiry_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  //edit Enquiry...
  public function edit_enquiry($id){
    $company_id = $this->session->userdata('company_id');
    $admin_roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $party_info = $this->Admin_Model->get_info('party_id', $id, 'uni_party');
      if($party_info){
        foreach($party_info as $info){
          $data['update'] = 'update';
          $data['party_id'] = $info->party_id;
          $data['party_firm'] = $info->party_firm;
          $data['party_address'] = $info->party_address;
          $data['party_area'] = $info->party_area;
          $data['party_taluka'] = $info->party_taluka;
          $data['party_district'] = $info->party_district;
          $data['party_pin'] = $info->party_pin;
          $data['party_mob1'] = $info->party_mob1;
          $data['party_mob2'] = $info->party_mob2;
          $data['party_email'] = $info->party_email;
          $data['party_website'] = $info->party_website;
          $data['party_gst_no'] = $info->party_gst_no;
          $data['party_pan_no'] = $info->party_pan_no;
          $data['party_requirment'] = $info->party_requirment;
          $data['party_business'] = $info->party_business;
          $data['party_status'] = $info->party_status;
        }
        $this->load->view('Admin/add_enquiry',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Update Enquiry... DB....
  public function update_enquiry(){
    $company_id = $this->session->userdata('company_id');
    $admin_roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $party_id = $this->input->post('party_id');
      $data = array(
        'party_firm' => $this->input->post('party_firm'),
        'party_address' => $this->input->post('party_address'),
        'party_area' => $this->input->post('party_area'),
        'party_taluka' => $this->input->post('party_taluka'),
        'party_district' => $this->input->post('party_district'),
        'party_pin' => $this->input->post('party_pin'),
        'party_mob1' => $this->input->post('party_mob1'),
        'party_mob2' => $this->input->post('party_mob2'),
        'party_email' => $this->input->post('party_email'),
        'party_website' => $this->input->post('party_website'),
        'party_gst_no' => $this->input->post('party_gst_no'),
        'party_pan_no' => $this->input->post('party_pan_no'),
        'party_requirment' => $this->input->post('party_requirment'),
        'party_business' => $this->input->post('party_business'),
      );
      $this->Admin_Model->update_info('party_id', $party_id, 'uni_party', $data);
      header('location:enquiry_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Enquiry...
  public function delete_enquiry($id){
    $company_id = $this->session->userdata('company_id');
    $admin_roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $this->Admin_Model->delete_info('party_id', $id, 'uni_party');
      header('location:../enquiry_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }


/********************** Delivery Challan *************************/
  // Add Delivery Challan...
  public function delivery_challan(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['delivery_no'] = $this->Transaction_Model->get_count_no($company_id,'delivery_no','uni_delivery_master');
      $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
      $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
      $this->load->view('Admin/delivery_challan',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delivery Challan List...
  public function delivery_challan_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['delivery_challan_list'] = $this->Transaction_Model->delivery_challan_list($company_id);
      $this->load->view('Admin/delivery_challan_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Save Delivery Challan...
  public function save_delivery_challan(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'delivery_no' => $this->input->post('delivery_no'),
        'delivery_date' => $this->input->post('delivery_date'),
        'delivery_party' => $this->input->post('delivery_party'),
        'delivery_transport' => $this->input->post('delivery_transport'),
        'delivery_docket_no' => $this->input->post('delivery_docket_no'),
        'delivery_terms' => $this->input->post('delivery_terms'),
        'delivery_total' => $this->input->post('delivery_total'),
      );
      $delivery_id = $this->Admin_Model->save_data('uni_delivery_master', $data);
      $i = 0;
      foreach($_POST['input'] as $user)
      {
        $user['delivery_id'] = $delivery_id;
        // echo print_r($_POST['input']);
        $this->db->insert('uni_delivery_trans', $user);
        $i++;
      }
      header('location:'.base_url().'Transaction/delivery_challan_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  public function edit_delivery_challan($delivery_id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
      $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
      $delivery_challan_data = $this->Transaction_Model->delivery_challan_data($company_id,$delivery_id);

      if($delivery_challan_data){
        foreach ($delivery_challan_data as $challan_data) {
          $data['update'] = 'yes';
          $data['delivery_id'] = $challan_data->delivery_id;
          $data['delivery_no'] = $challan_data->delivery_no;
          $data['delivery_date'] = $challan_data->delivery_date;
          $data['delivery_party'] = $challan_data->delivery_party;
          $data['party_id'] = $challan_data->party_id;
          $data['party_firm'] = $challan_data->party_firm;
          $data['delivery_transport'] = $challan_data->delivery_transport;
          $data['delivery_docket_no'] = $challan_data->delivery_docket_no;
          $data['delivery_terms'] = $challan_data->delivery_terms;
          $data['delivery_total'] = $challan_data->delivery_total;
        }
      }
      $data['challan_trans_data'] = $this->Transaction_Model->delivery_challan_trans_data($delivery_id);
      // echo print_r(  $data['challan_trans_data']);
      $this->load->view('Admin/delivery_challan',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }

  public function update_delivery_challan(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $delivery_id = $this->input->post('delivery_id');
      $challan_data = array(
        'delivery_date' => $this->input->post('delivery_date'),
        'delivery_party' => $this->input->post('delivery_party'),
        'delivery_transport' => $this->input->post('delivery_transport'),
        'delivery_docket_no' => $this->input->post('delivery_docket_no'),
        'delivery_terms' => $this->input->post('delivery_terms'),
        'delivery_total' => $this->input->post('delivery_total'),
      );
      $this->Admin_Model->update_info('delivery_id', $delivery_id, 'uni_delivery_master', $challan_data);
      foreach($_POST['input'] as $user)
      {
        if(isset($user['delivery_trans_id'])){
          $delivery_trans_id = $user['delivery_trans_id'];
          if(!isset($user['make_id'])){
            $this->Admin_Model->delete_info('delivery_trans_id', $delivery_trans_id, 'uni_delivery_trans');
          }else{
              $this->Admin_Model->update_info('delivery_trans_id', $delivery_trans_id, 'uni_delivery_trans', $user);
          }
        }
        else{
          $user['delivery_id'] = $delivery_id;
          $this->db->insert('uni_delivery_trans', $user);
        }
      }
      header('location:'.base_url().'Transaction/delivery_challan_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }


 /********************** Purchase Agreement *************************/
 // Add Purchase Agreement...
 public function purchase_agreement(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['purchase_order_no'] = $this->Transaction_Model->get_count_no($company_id,'purchase_order_no','uni_purchase_master');
     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $data['display_color_list'] = $this->Admin_Model->get_list($company_id,'display_color_id','ASC','uni_display_color');
     $data['cabinate_color_list'] = $this->Admin_Model->get_list($company_id,'cabinet_color_id','ASC','uni_cabinet_color');
     $this->load->view('Admin/purchase_agreement', $data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Purchase Agreement List...
 public function purchase_agreement_list(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['purchase_agrement_list'] = $this->Transaction_Model->purchase_agrement_list($company_id);
     $this->load->view('Admin/purchase_agreement_list',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 //
 public function edit_purchase_agreement($purchase_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $data['display_color_list'] = $this->Admin_Model->get_list($company_id,'display_color_id','ASC','uni_display_color');
     $data['cabinate_color_list'] = $this->Admin_Model->get_list($company_id,'cabinet_color_id','ASC','uni_cabinet_color');

     $purchase_agreement_data = $this->Transaction_Model->purchase_agreement_data($company_id,$purchase_id);

     if($purchase_agreement_data){
       foreach ($purchase_agreement_data as $purchase_data) {
         $data['update'] = 'yes';
         $data['purchase_id'] = $purchase_data->purchase_id;
         $data['purchase_order_no'] = $purchase_data->purchase_order_no;
         $data['purchase_date'] = $purchase_data->purchase_date;
         $data['purchase_party'] = $purchase_data->purchase_party;
         $data['party_id'] = $purchase_data->party_id;
         $data['party_firm'] = $purchase_data->party_firm;
         $data['invoice_no'] = $purchase_data->invoice_no;
         $data['invoice_date'] = $purchase_data->invoice_date;
         $data['purchase_terms'] = $purchase_data->purchase_terms;
         $data['purchase_basic_price'] = $purchase_data->purchase_basic_price;
         $data['purchase_gst'] = $purchase_data->purchase_gst;
         $data['purchase_stamping'] = $purchase_data->purchase_stamping;
         $data['purchase_other'] = $purchase_data->purchase_other;
         $data['purchase_total'] = $purchase_data->purchase_total;
         $data['purchase_advance'] = $purchase_data->purchase_advance;
         $data['purchase_due'] = $purchase_data->purchase_due;
         $data['purchase_del_period'] = $purchase_data->purchase_del_period;
         $data['purchase_pay_terms'] = $purchase_data->purchase_pay_terms;
       }
     }
     $data['purchase_trans_data'] = $this->Transaction_Model->purchase_trans_data($purchase_id);
     // echo print_r(  $data['challan_trans_data']);
     $this->load->view('Admin/purchase_agreement',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 // Save Purchase Agreement...
 public function save_purchase_agreement(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data = array(
       'company_id' => $company_id,
       'purchase_order_no' => $this->input->post('purchase_order_no'),
       'purchase_date' => $this->input->post('purchase_date'),
       'purchase_party' => $this->input->post('purchase_party'),
       'invoice_no' => $this->input->post('invoice_no'),
       'invoice_date' => $this->input->post('invoice_date'),
       'purchase_terms' => $this->input->post('purchase_terms'),
       'purchase_basic_price' => $this->input->post('purchase_basic_price'),
       'purchase_gst' => $this->input->post('purchase_gst'),
       'purchase_stamping' => $this->input->post('purchase_stamping'),
       'purchase_other' => $this->input->post('purchase_other'),
       'purchase_total' => $this->input->post('purchase_total'),
       'purchase_advance' => $this->input->post('purchase_advance'),
       'purchase_due' => $this->input->post('purchase_due'),
       'purchase_del_period' => $this->input->post('purchase_del_period'),
       'purchase_pay_terms' => $this->input->post('purchase_pay_terms'),
     );
     $purchase_id = $this->Admin_Model->save_data('uni_purchase_master', $data);
     echo $purchase_id.'<br>';
     $i = 0;
     foreach($_POST['input'] as $user)
     {
       $user['purchase_id'] = $purchase_id;
       // echo print_r($user);
       $this->db->insert('uni_purchase_trans', $user);
       $i++;
     }
   } else{
     header('location:'.base_url().'Login');
   }
 }

 // update Purchase Agreement...
 public function update_purchase_agreement(){
     $company_id = $this->session->userdata('company_id');
     if($company_id){
       $purchase_id = $this->input->post('purchase_id');
       $purchase_data = array(
         'purchase_date' => $this->input->post('purchase_date'),
         'purchase_party' => $this->input->post('purchase_party'),
         'invoice_no' => $this->input->post('invoice_no'),
         'invoice_date' => $this->input->post('invoice_date'),
         'purchase_terms' => $this->input->post('purchase_terms'),
         'purchase_basic_price' => $this->input->post('purchase_basic_price'),
         'purchase_gst' => $this->input->post('purchase_gst'),
         'purchase_stamping' => $this->input->post('purchase_stamping'),
         'purchase_other' => $this->input->post('purchase_other'),
         'purchase_total' => $this->input->post('purchase_total'),
         'purchase_advance' => $this->input->post('purchase_advance'),
         'purchase_due' => $this->input->post('purchase_due'),
         'purchase_del_period' => $this->input->post('purchase_del_period'),
         'purchase_pay_terms' => $this->input->post('purchase_pay_terms'),
       );
       $this->Admin_Model->update_info('purchase_id', $purchase_id, 'uni_purchase_master', $purchase_data);
       foreach($_POST['input'] as $user)
       {
         echo print_r($user).'<br>';
         if(isset($user['purchase_trans_id'])){
           $purchase_trans_id = $user['purchase_trans_id'];
           if(!isset($user['make_id'])){
             $this->Admin_Model->delete_info('purchase_trans_id', $purchase_trans_id, 'uni_purchase_trans');
           }else{
               $this->Admin_Model->update_info('purchase_trans_id', $purchase_trans_id, 'uni_purchase_trans', $user);
           }
         }
         else{
           $user['purchase_id'] = $purchase_id;
           $this->db->insert('uni_purchase_trans', $user);
         }
       }
       header('location:'.base_url().'Transaction/purchase_agreement_list');
     } else{
       header('location:'.base_url().'Login');
     }
 }

/********************** Sale Bill *************************/
// Add Sale
 public function sale_bill(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['sale_bill_no'] = $this->Transaction_Model->get_count_no($company_id,'sale_bill_no','uni_sale_master');
     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $data['user_list'] = $this->Admin_Model->get_list($company_id,'user_id','ASC','uni_user');
     $this->load->view('Admin/sale_bill',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Sale List...
 public function sale_bill_list(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['sale_bill_list'] = $this->Transaction_Model->sale_bill_list($company_id);
     $this->load->view('Admin/sale_bill_list',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
// Get Dellivery list depend on Party...
 public function GetSaleDelivery(){
   $party_id = $this->input->post('party_id');
   $deliveryData = $this->Transaction_Model->GetSaleDelivery($party_id);
   echo "<option value=''>Select Delivery Challan No. for sale bill </option>";
 	foreach ($deliveryData as $data) {
 		echo "<option value=".$data->delivery_id."> ".$data->delivery_no." </option>";
 	}
 }
 // Save Sale...
 public function save_sale(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data = array(
       'company_id' => $company_id,
       'sale_bill_no' => $this->input->post('sale_bill_no'),
       'sale_date' => $this->input->post('sale_date'),
       'sale_party' => $this->input->post('sale_party'),
       'sale_challan_no' => $this->input->post('sale_challan_no'),
       'sale_employee' => $this->input->post('sale_employee'),
       'sale_terms' => $this->input->post('sale_terms'),
       'total_gst' => $this->input->post('total_gst'),
       'total_base_amount' => $this->input->post('total_base_amount'),
       'sale_total' => $this->input->post('sale_total'),
     );
     $sale_id = $this->Admin_Model->save_data('uni_sale_master', $data);
     foreach($_POST['input'] as $user)
     {
       $user['sale_id'] = $sale_id;
       $this->db->insert('uni_sale_trans', $user);
     }
     header('location:'.base_url().'Transaction/sale_bill_list');
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Edit Bill...
 public function edit_sale($sale_id){
   $company_id = $this->session->userdata('company_id');
   if($sale_id){
     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $data['user_list'] = $this->Admin_Model->get_list($company_id,'user_id','ASC','uni_user');

     $sale_bill_data = $this->Transaction_Model->sale_bill_data($company_id,$sale_id);
      // echo print_r($sale_bill_data);
     if($sale_bill_data){
       foreach ($sale_bill_data as $sale_data) {
         $data['update'] = 'yes';
         $data['sale_id'] = $sale_data->sale_id;
         $data['sale_bill_no'] = $sale_data->sale_bill_no;
         $data['sale_date'] = $sale_data->sale_date;
         $data['sale_party'] = $sale_data->sale_party;
         $data['party_id'] = $sale_data->party_id;
         $data['party_firm'] = $sale_data->party_firm;
         $data['sale_challan_no'] = $sale_data->sale_challan_no;
         $data['delivery_id'] = $sale_data->delivery_id;
         $data['delivery_no'] = $sale_data->delivery_no;
         $data['sale_employee'] = $sale_data->sale_employee;
         $data['user_id'] = $sale_data->user_id;
         $data['user_name'] = $sale_data->user_name;
         $data['sale_terms'] = $sale_data->sale_terms;
         $data['total_gst'] = $sale_data->total_gst;
         $data['total_base_amount'] = $sale_data->total_base_amount;
         $data['sale_total'] = $sale_data->sale_total;
       }
     }
     $data['sale_trans_data'] = $this->Transaction_Model->sale_trans_data($sale_id);
     $this->load->view('Admin/sale_bill',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Update Sale...
 public function update_sale(){
     $company_id = $this->session->userdata('company_id');
     if($company_id){
       $sale_id = $this->input->post('sale_id');
       $purchase_data = array(
         'sale_date' => $this->input->post('sale_date'),
         'sale_party' => $this->input->post('sale_party'),
         'sale_challan_no' => $this->input->post('sale_challan_no'),
         'sale_employee' => $this->input->post('sale_employee'),
         'sale_terms' => $this->input->post('sale_terms'),
         'total_gst' => $this->input->post('total_gst'),
         'total_base_amount' => $this->input->post('total_base_amount'),
         'sale_total' => $this->input->post('sale_total'),
       );
       $this->Admin_Model->update_info('sale_id', $sale_id, 'uni_sale_master', $purchase_data);
       foreach($_POST['input'] as $user)
       {
         // echo print_r($user).'<br>';
         if(isset($user['sale_trans_id'])){
           $sale_trans_id = $user['sale_trans_id'];
           if(!isset($user['make_id'])){
             $this->Admin_Model->delete_info('sale_trans_id', $sale_trans_id, 'uni_sale_trans');
           }else{
               $this->Admin_Model->update_info('sale_trans_id', $sale_trans_id, 'uni_sale_trans', $user);
           }
         }
         else{
           $user['sale_id'] = $sale_id;
           $this->db->insert('uni_sale_trans', $user);
         }
       }
       header('location:'.base_url().'Transaction/sale_bill_list');
     } else{
       header('location:'.base_url().'Login');
     }
 }



/********************** GOVT STAMPING CHALLAN *************************/
// Add Gov Stamping...
 public function govt_stamp_bill(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['govt_stamp_no'] = $this->Transaction_Model->get_count_no($company_id,'govt_stamp_no','uni_govt_stamp_master');
     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $data['division_list'] = $this->Admin_Model->get_list($company_id,'division_id','ASC','uni_division');

     $data['capacity_list'] = $this->Admin_Model->get_list($company_id,'capacity_id','ASC','uni_capacity');
     $data['min_list'] = $this->Admin_Model->get_list($company_id,'min_id','ASC','uni_min');
     $data['accuracy_list'] = $this->Admin_Model->get_list($company_id,'accuracy_id','ASC','uni_accuracy');
     $data['class_list'] = $this->Admin_Model->get_list($company_id,'class_id','ASC','uni_class');

     $this->load->view('Admin/govt_stamping_bill',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Save Gov Stamping...
 public function save_govt_stamp(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $govt_stamp_objection = $this->input->post('govt_stamp_objection');
     $govt_stamp_condition = $this->input->post('govt_stamp_condition');
     if(!isset($govt_stamp_objection)){ $govt_stamp_objection = 'no'; }
     if(!isset($govt_stamp_condition)){ $govt_stamp_condition = 'no'; }
     $data = array(
       'company_id' => $company_id,
       'govt_stamp_no' => $this->input->post('govt_stamp_no'),
       'govt_stamp_date' => $this->input->post('govt_stamp_date'),
       'govt_stamp_party' => $this->input->post('govt_stamp_party'),
       'govt_stamp_division' => $this->input->post('govt_stamp_division'),
       'govt_stamp_vc_no' => $this->input->post('govt_stamp_vc_no'),
       'govt_stamp_vc_date' => $this->input->post('govt_stamp_vc_date'),
       'govt_stamp_grn_no' => $this->input->post('govt_stamp_grn_no'),
       'govt_stamp_grn_date' => $this->input->post('govt_stamp_grn_date'),
       'govt_stamp_objection' => $govt_stamp_objection,
       'govt_stamp_condition' => $govt_stamp_condition,
       'govt_stamp_late_fee' => $this->input->post('govt_stamp_late_fee'),
       'govt_stamp_hctada' => $this->input->post('govt_stamp_hctada'),
       'govt_stamp_ser_charge' => $this->input->post('govt_stamp_ser_charge'),
       'govt_stamp_total' => $this->input->post('govt_stamp_total'),
     );
     $govt_stamp_id = $this->Admin_Model->save_data('uni_govt_stamp_master', $data);

     foreach($_POST['input'] as $user)
     {
       $user['govt_stamp_id'] = $govt_stamp_id;
       $this->db->insert('uni_govt_stamp_trans', $user);
     }
     header('location:'.base_url().'Transaction/govt_stamp_bill_list');
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Gov Stamping List...
 public function govt_stamp_bill_list(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['govt_stamp_list'] = $this->Transaction_Model->govt_stamp_list($company_id);
     $this->load->view('Admin/govt_stamping_bill_list',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Edit Bill...
 public function edit_govt_stamp($govt_stamp_id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $data['division_list'] = $this->Admin_Model->get_list($company_id,'division_id','ASC','uni_division');

     $data['capacity_list'] = $this->Admin_Model->get_list($company_id,'capacity_id','ASC','uni_capacity');
     $data['min_list'] = $this->Admin_Model->get_list($company_id,'min_id','ASC','uni_min');
     $data['accuracy_list'] = $this->Admin_Model->get_list($company_id,'accuracy_id','ASC','uni_accuracy');
     $data['class_list'] = $this->Admin_Model->get_list($company_id,'class_id','ASC','uni_class');

     $govt_stamp_data = $this->Transaction_Model->govt_stamp_data($company_id,$govt_stamp_id);
      // echo print_r($govt_stamp_data);
     if($govt_stamp_data){
       foreach ($govt_stamp_data as $govt_data) {
         $data['update'] = 'yes';
         $data['govt_stamp_id'] = $govt_data->govt_stamp_id;
         $data['govt_stamp_no'] = $govt_data->govt_stamp_no;
         $data['govt_stamp_date'] = $govt_data->govt_stamp_date;
         $data['govt_stamp_party'] = $govt_data->govt_stamp_party;
         $data['party_id'] = $govt_data->party_id;
         $data['party_firm'] = $govt_data->party_firm;
         $data['govt_stamp_division'] = $govt_data->govt_stamp_division;
         $data['division_id'] = $govt_data->division_id;
         $data['division_name'] = $govt_data->division_name;
         $data['govt_stamp_vc_no'] = $govt_data->govt_stamp_vc_no;
         $data['govt_stamp_vc_date'] = $govt_data->govt_stamp_vc_date;
         $data['govt_stamp_grn_no'] = $govt_data->govt_stamp_grn_no;
         $data['govt_stamp_grn_date'] = $govt_data->govt_stamp_grn_date;
         $data['govt_stamp_objection'] = $govt_data->govt_stamp_objection;
         $data['govt_stamp_condition'] = $govt_data->govt_stamp_condition;
         $data['govt_stamp_late_fee'] = $govt_data->govt_stamp_late_fee;
         $data['govt_stamp_hctada'] = $govt_data->govt_stamp_hctada;
         $data['govt_stamp_ser_charge'] = $govt_data->govt_stamp_ser_charge;
         $data['govt_stamp_total'] = $govt_data->govt_stamp_total;
       }
     }
     $data['govt_stamp_trans_data'] = $this->Transaction_Model->govt_stamp_trans_data($govt_stamp_id);
     $this->load->view('Admin/govt_stamping_bill',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 // Update Sale...
 public function update_govt_stamp(){
     $company_id = $this->session->userdata('company_id');
     if($company_id){
       $govt_stamp_id = $this->input->post('govt_stamp_id');
       $govt_stamp_data = array(
         'govt_stamp_date' => $this->input->post('govt_stamp_date'),
         'govt_stamp_party' => $this->input->post('govt_stamp_party'),
         'govt_stamp_division' => $this->input->post('govt_stamp_division'),
         'govt_stamp_vc_no' => $this->input->post('govt_stamp_vc_no'),
         'govt_stamp_vc_date' => $this->input->post('govt_stamp_vc_date'),
         'govt_stamp_grn_no' => $this->input->post('govt_stamp_grn_no'),
         'govt_stamp_grn_date' => $this->input->post('govt_stamp_grn_date'),
         'govt_stamp_objection' => $govt_stamp_objection,
         'govt_stamp_condition' => $govt_stamp_condition,
         'govt_stamp_late_fee' => $this->input->post('govt_stamp_late_fee'),
         'govt_stamp_hctada' => $this->input->post('govt_stamp_hctada'),
         'govt_stamp_ser_charge' => $this->input->post('govt_stamp_ser_charge'),
         'govt_stamp_total' => $this->input->post('govt_stamp_total'),
       );
       $this->Admin_Model->update_info('govt_stamp_id', $govt_stamp_id, 'uni_govt_stamp_master', $govt_stamp_data);
       foreach($_POST['input'] as $user)
       {
         // echo print_r($user).'<br>';
         if(isset($user['govt_stamp_trans_id'])){
           $govt_stamp_trans_id = $user['govt_stamp_trans_id'];
           if(!isset($user['make_id'])){
             $this->Admin_Model->delete_info('govt_stamp_trans_id', $govt_stamp_trans_id, 'uni_govt_stamp_trans');
           }else{
               $this->Admin_Model->update_info('govt_stamp_trans_id', $govt_stamp_trans_id, 'uni_govt_stamp_trans', $user);
           }
         }
         else{
           $user['govt_stamp_id'] = $govt_stamp_id;
           $this->db->insert('uni_govt_stamp_trans', $user);
         }
       }
       header('location:'.base_url().'Transaction/govt_stamp_bill_list');
     } else{
       header('location:'.base_url().'Login');
     }
 }

 /********************** GOVT STAMPING CHALLAN *************************/
 public function repairy_bill(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['repairy_no'] = $this->Transaction_Model->get_count_no($company_id,'repairy_no','uni_repairy_master');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     $data['capacity_list'] = $this->Admin_Model->get_list($company_id,'capacity_id','ASC','uni_capacity');
     $data['accuracy_list'] = $this->Admin_Model->get_list($company_id,'accuracy_id','ASC','uni_accuracy');
     $data['class_list'] = $this->Admin_Model->get_list($company_id,'class_id','ASC','uni_class');

     $this->load->view('Admin/repairy_bill',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Save Repairy Bill...
 public function save_repairy_bill(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data = array(
       'company_id' => $company_id,
       'repairy_no' => $this->input->post('repairy_no'),
       'repairy_date' => $this->input->post('repairy_date'),
       'repairy_party' => $this->input->post('repairy_party'),
       'repairy_person' => $this->input->post('repairy_person'),
       'repairy_contact' => $this->input->post('repairy_contact'),
       'repairy_basic_charge' => $this->input->post('repairy_basic_charge'),
       'repairy_min_charge' => $this->input->post('repairy_min_charge'),
       'repairy_total' => $this->input->post('repairy_total'),
     );
     $repairy_id = $this->Admin_Model->save_data('uni_repairy_master', $data);

     foreach($_POST['input'] as $user)
     {
       $user['repairy_id'] = $repairy_id;
       $this->db->insert('uni_repairy_trans', $user);
     }
     header('location:'.base_url().'Transaction/repairy_bill_list');
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Repairy Bill List
 public function repairy_bill_list(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['repairy_bill_list'] = $this->Transaction_Model->repairy_bill_listt($company_id);
     $this->load->view('Admin/repairy_bill_list',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
//
// Edit Repairy Bill...
public function edit_repairy_bill($repairy_id){
  $company_id = $this->session->userdata('company_id');
  if($company_id){
    $data['repairy_no'] = $this->Transaction_Model->get_count_no($company_id,'repairy_no','uni_repairy_master');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
    $data['capacity_list'] = $this->Admin_Model->get_list($company_id,'capacity_id','ASC','uni_capacity');
    $data['accuracy_list'] = $this->Admin_Model->get_list($company_id,'accuracy_id','ASC','uni_accuracy');
    $data['class_list'] = $this->Admin_Model->get_list($company_id,'class_id','ASC','uni_class');

    $repairy_bill_data = $this->Transaction_Model->repairy_bill_data($company_id,$repairy_id);
    if($repairy_bill_data){
      foreach ($repairy_bill_data as $repairy_data) {
        $data['update'] = 'yes';
        $data['repairy_id'] = $repairy_data->repairy_id;
        $data['repairy_no'] = $repairy_data->repairy_no;
        $data['repairy_date'] = $repairy_data->repairy_date;
        $data['repairy_party'] = $repairy_data->repairy_party;
        $data['party_id'] = $repairy_data->party_id;
        $data['party_firm'] = $repairy_data->party_firm;
        $data['repairy_person'] = $repairy_data->repairy_person;
        $data['repairy_contact'] = $repairy_data->repairy_contact;
        $data['repairy_basic_charge'] = $repairy_data->repairy_basic_charge;
        $data['repairy_min_charge'] = $repairy_data->repairy_min_charge;
        $data['repairy_total'] = $repairy_data->repairy_total;
      }
    }
    $data['repairy_bill_trans_data'] = $this->Transaction_Model->repairy_bill_trans_data($repairy_id);
     // echo print_r($data['repairy_bill_trans_data']);
    $this->load->view('Admin/repairy_bill',$data);
  } else{
    header('location:'.base_url().'Login');
  }
}

// Update Repary Bill...
public function update_repairy_bill(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $repairy_id = $this->input->post('repairy_id');
      $repairy_data = array(
        'repairy_date' => $this->input->post('repairy_date'),
        'repairy_party' => $this->input->post('repairy_party'),
        'repairy_person' => $this->input->post('repairy_person'),
        'repairy_contact' => $this->input->post('repairy_contact'),
        'repairy_basic_charge' => $this->input->post('repairy_basic_charge'),
        'repairy_min_charge' => $this->input->post('repairy_min_charge'),
        'repairy_total' => $this->input->post('repairy_total'),
      );
      $this->Admin_Model->update_info('repairy_id', $repairy_id, 'uni_repairy_master', $repairy_data);
      foreach($_POST['input'] as $user)
      {
        // echo print_r($user).'<br>';
        if(isset($user['repairy_trans_id'])){
          $repairy_trans_id = $user['repairy_trans_id'];
          if(!isset($user['make_id'])){
            $this->Admin_Model->delete_info('repairy_trans_id', $repairy_trans_id, 'uni_repairy_trans');
          }else{
              $this->Admin_Model->update_info('repairy_trans_id', $repairy_trans_id, 'uni_repairy_trans', $user);
          }
        }
        else{
          $user['repairy_trans_id'] = $repairy_id;
          $this->db->insert('uni_repairy_trans', $user);
        }
      }
      header('location:'.base_url().'Transaction/repairy_bill_list');
    } else{
      header('location:'.base_url().'Login');
    }
}

 public function quotation_list(){
   $this->load->view('Admin/quotation_list');
 }
 public function quotation(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['quotation_no'] = $this->Transaction_Model->get_count_no($company_id,'quotation_no','uni_quotation_master');
     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     $data['capacity_list'] = $this->Admin_Model->get_list($company_id,'capacity_id','ASC','uni_capacity');
     $data['accuracy_list'] = $this->Admin_Model->get_list($company_id,'accuracy_id','ASC','uni_accuracy');
     $data['class_list'] = $this->Admin_Model->get_list($company_id,'class_id','ASC','uni_class');
     $data['platter_list'] = $this->Admin_Model->get_list($company_id,'platter_id','ASC','uni_platter_size');
     $this->load->view('Admin/quotation',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }

 /********************** Receipt *************************/
 // Add Receipt

 public function receipt_list(){
    $this->load->view('Admin/receipt_list');
 }
 public function receipt(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['receipt_no'] = $this->Transaction_Model->get_count_no($company_id,'receipt_no','uni_receipt');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $this->load->view('Admin/receipt',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Save Receipt...
 public function save_reciept(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data = array(
       'company_id' => $company_id,
       'receipt_no' => $this->input->post('receipt_no'),
       'receipt_date' => $this->input->post('receipt_date'),
       'receipt_party' => $this->input->post('receipt_party'),
       'receipt_outstanding' => $this->input->post('receipt_outstanding'),
       'receipt_amount' => $this->input->post('receipt_amount'),
       'receipt_narration' => $this->input->post('receipt_narration'),
     );
     $this->Admin_Model->save_data('uni_receipt', $data);
     header('location:receipt');
   } else{
     header('location:'.base_url().'Login');
   }
 }

/********************** Expense Voucher *************************/
// Add Expense Voucher...
public function expense_voucher_list(){
   $this->load->view('Admin/expense_voucher_list');
}
 public function expense_voucher(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['expense_no'] = $this->Transaction_Model->get_count_no($company_id,'expense_no','uni_expense');
     $this->load->view('Admin/expense_voucher',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Save Expense Voucher...
 public function save_expense(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data = array(
       'company_id' => $company_id,
       'expense_no' => $this->input->post('expense_no'),
       'expense_date' => $this->input->post('expense_date'),
       'expense_amount' => $this->input->post('expense_amount'),
       'expense_narration' => $this->input->post('expense_narration'),
     );
     $this->Admin_Model->save_data('uni_expense', $data);
     header('location:expense_voucher');
   } else{
     header('location:'.base_url().'Login');
   }
 }



 /********************** Complaint Informatiom *************************/
 // Add Complaint Informatiom...
 public function complaint_information(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['complaint_no'] = $this->Transaction_Model->get_count_no($company_id,'complaint_no','uni_complaint');
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $data['user_list'] = $this->Admin_Model->get_list($company_id,'user_id','ASC','uni_user');
     $this->load->view('Admin/complaint_information', $data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Complaint Informatiom List...
 public function complaint_list(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['complaint_list'] = $this->Transaction_Model->get_complaint_list($company_id);
     $this->load->view('Admin/complaint_list',$data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Save Complaint Informatiom
 public function save_complaint(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data = array(
       'company_id' => $company_id,
       'complaint_no' => $this->input->post('complaint_no'),
       'complaint_date' => $this->input->post('complaint_date'),
       'party_id' => $this->input->post('party_id'),
       'complaint_service' => $this->input->post('complaint_service'),
       'complaint_reporting' => $this->input->post('complaint_reporting'),
       'complaint_person' => $this->input->post('complaint_person'),
       'complaint_contact_no' => $this->input->post('complaint_contact_no'),
       'complaint_engeeneer' => $this->input->post('complaint_engeeneer'),
     );
     $this->Admin_Model->save_data('uni_complaint', $data);
     header('location:complaint_list');
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Edit Complaint Informatiom...
 public function edit_complaint($id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $complaint_info = $this->Transaction_Model->get_complaint_info($company_id, $id);
     $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
     $data['user_list'] = $this->Admin_Model->get_list($company_id,'user_id','ASC','uni_user');
     if($complaint_info){
       foreach($complaint_info as $info){
         $data['update'] = 'update';
         $data['complaint_id'] = $info->complaint_id;
         $data['complaint_no'] = $info->complaint_no;
         $data['complaint_date'] = $info->complaint_date;
         $data['party_id'] = $info->party_id;
         $data['party_firm'] = $info->party_firm;
         $data['complaint_service'] = $info->complaint_service;
         $data['complaint_reporting'] = $info->complaint_reporting;
         $data['complaint_person'] = $info->complaint_person;
         $data['complaint_contact_no'] = $info->complaint_contact_no;
         $data['complaint_engeeneer'] = $info->complaint_engeeneer;
       }
       $this->load->view('Admin/complaint_information',$data);
     }
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Update Complaint Informatiom... DB...
 public function update_complaint(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $complaint_id = $this->input->post('complaint_id');
     $data = array(
       'complaint_no' => $this->input->post('complaint_no'),
       'complaint_date' => $this->input->post('complaint_date'),
       'party_id' => $this->input->post('party_id'),
       'complaint_service' => $this->input->post('complaint_service'),
       'complaint_reporting' => $this->input->post('complaint_reporting'),
       'complaint_person' => $this->input->post('complaint_person'),
       'complaint_contact_no' => $this->input->post('complaint_contact_no'),
       'complaint_engeeneer' => $this->input->post('complaint_engeeneer'),
     );
     $this->Admin_Model->update_info('complaint_id', $complaint_id, 'uni_complaint', $data);
     header('location:complaint_list');
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Delete Complaint Informatiom...
 public function delete_complaint($id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $this->Admin_Model->delete_info('complaint_id', $id, 'uni_complaint');
     header('location:../complaint_information_list');
   } else{
     header('location:'.base_url().'Login');
   }
 }

 // Service Report...
 public function service_report($id){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data['service_no'] = $this->Transaction_Model->get_count_no($company_id,'service_no','uni_service');
     $complaint_info = $this->Transaction_Model->get_complaint_info($company_id, $id);
     $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
     if($complaint_info){
       foreach($complaint_info as $info){
         $data['complaint_id'] = $info->complaint_id;
         $data['complaint_no'] = $info->complaint_no;
         $data['complaint_date'] = $info->complaint_date;
         $data['party_id'] = $info->party_id;
         $data['party_firm'] = $info->party_firm;
         $data['complaint_service'] = $info->complaint_service;
         $data['complaint_reporting'] = $info->complaint_reporting;
         $data['complaint_person'] = $info->complaint_person;
         $data['complaint_contact_no'] = $info->complaint_contact_no;
         $data['complaint_engeeneer'] = $info->complaint_engeeneer;
         $data['user_name'] = $info->user_name;
         $data['user_mobile'] = $info->user_mobile;
       }
     }
     $this->load->view('Admin/service_report', $data);
   } else{
     header('location:'.base_url().'Login');
   }
 }
 // Save Service Report...
 public function save_service(){
   $company_id = $this->session->userdata('company_id');
   if($company_id){
     $data = array(
       'company_id' => $company_id,
       'complaint_id' => $this->input->post('complaint_id'),
       'service_no' => $this->input->post('service_no'),
       'make_id' => $this->input->post('make_id'),
       'make_no' => $this->input->post('make_no'),
       'service_sr_no' => $this->input->post('service_sr_no'),
       'service_range' => $this->input->post('service_range'),
       'service_stamping' => $this->input->post('service_stamping'),
       'service_observation' => $this->input->post('service_observation'),
       'service_recommend' => $this->input->post('service_recommend'),
       'service_component' => $this->input->post('service_component'),
       'service_call_completion' => $this->input->post('service_call_completion'),
       'service_charges_fee' => $this->input->post('service_charges_fee'),
       'service_date' => $this->input->post('service_date'),
       'service_time_in' => $this->input->post('service_time_in'),
       'service_time_out' => $this->input->post('service_time_out'),
     );
     $this->Admin_Model->save_data('uni_service', $data);
     header('location:complaint_list');
   } else{
     header('location:'.base_url().'Login');
   }
 }

/********************** Ajax Load Informatiom *************************/

  // Get product data by make_id
  public function GetProduct(){
    $make_id = $this->input->post('make_id');
    $productData = $this->Transaction_Model->GetProduct($make_id);
    echo "<option value='0'>Select Model No. </option>";
  	foreach ($productData as $data) {
  		echo "<option value=".$data->product_id."> ".$data->product_model_no." </option>";
  	}
  }

  public function GetProductDetails(){
    $product_id = $this->input->post('model_no');
    $productDetails = $this->Transaction_Model->GetProductDetails($product_id);
    foreach($productDetails as $productDetails){
      $data['capacity_id'] = $productDetails ->capacity_id;
      $data['capacity_name'] = $productDetails ->capacity_name;
      $data['accuracy_id'] = $productDetails ->accuracy_id;
      $data['accuracy_name'] = $productDetails ->accuracy_name;
      $data['class_id'] = $productDetails ->class_id;
      $data['class_name'] = $productDetails ->class_name;
      $data['platter_id'] = $productDetails ->platter_id;
      $data['platter_size'] = $productDetails ->platter_size;
      $data['sale_price'] = $productDetails ->sale_price;
    }
    echo json_encode($data);
  }

}
