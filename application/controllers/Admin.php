<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_Model');
  }
  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'Login');
  }
  public function dashboard(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');

    if($company_id){
      if($roll_id == 1){
        $party_id = null;
        $party = null;
        $data['user_count'] = $this->Admin_Model->get_count($party,$party_id,'user_id',$company_id,'uni_user');
        $data['make_count'] = $this->Admin_Model->get_count($party,$party_id,'make_id',$company_id,'uni_make');
        $data['product_count'] = $this->Admin_Model->get_count($party,$party_id,'product_id',$company_id,'uni_product');
        $data['party_count'] = $this->Admin_Model->get_count($party,$party_id,'party_id',$company_id,'uni_party');

        $data['enquiry_count'] = $this->Admin_Model->get_enquiry_count($party_id,$company_id);
        $data['delivery_challan_count'] = $this->Admin_Model->get_count($party,$party_id,'delivery_id',$company_id,'uni_delivery_master');
        $data['purchase_count'] = $this->Admin_Model->get_count($party,$party_id,'purchase_id',$company_id,'uni_purchase_master');
        $data['sale_count'] = $this->Admin_Model->get_count($party,$party_id,'sale_id',$company_id,'uni_sale_master');
        $data['quotation_count'] = $this->Admin_Model->get_count($party,$party_id,'quotation_id',$company_id,'uni_quotation_master');
        $data['repair_count'] = $this->Admin_Model->get_count($party,$party_id,'repairy_id',$company_id,'uni_repairy_master');
        $data['gov_stamping_count'] = $this->Admin_Model->get_count($party,$party_id,'govt_stamp_id',$company_id,'uni_govt_stamp_master');
        $data['complaint_count'] = $this->Admin_Model->get_complaint_count($party_id,$company_id);

        $this->load->view('Admin/dashboard',$data);
      }
      else{
        $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
        $this->load->view('Admin/party_all_info', $data);
      }

    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Company Information *************************/
    public function company_information(){
      $company_id = $this->session->userdata('company_id');
      $roll_id = $this->session->userdata('admin_roll_id');
      if($company_id){
        $data['company_list'] = $this->Admin_Model->get_list($company_id,'company_id','ASC','uni_company');
        $this->load->view('Admin/company_list', $data);
      } else{
        header('location:'.base_url().'Login');
      }
    }

    public function company_list(){
      $company_id = $this->session->userdata('company_id');
      $roll_id = $this->session->userdata('admin_roll_id');
      if($company_id){
        $data['company_list'] = $this->Admin_Model->get_list($company_id,'company_id','ASC','uni_company');
        $this->load->view('Admin/company_list');
      } else{
        header('location:'.base_url().'Login');
      }
    }

    public function edit_company($id){
      $company_id = $this->session->userdata('company_id');
      if($company_id){
        $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'uni_company');
        if($company_info){
          foreach($company_info as $info){
            $data['update'] = 'update';
            $data['company_id'] = $info->company_id;
            $data['company_name'] = $info->company_name;
            $data['company_address'] = $info->company_address;
            $data['company_city'] = $info->company_city;
            $data['company_state'] = $info->company_state;
            $data['company_district'] = $info->company_district;
            $data['company_pincode'] = $info->company_pincode;
            $data['company_statecode'] = $info->company_statecode;
            $data['company_mob1'] = $info->company_mob1;
            $data['company_mob2'] = $info->company_mob2;
            $data['company_email'] = $info->company_email;
            $data['company_website'] = $info->company_website;
            $data['company_pan_no'] = $info->company_pan_no;
            $data['company_gst_no'] = $info->company_gst_no;
            $data['company_lic1'] = $info->company_lic1;
            $data['company_lic2'] = $info->company_lic2;
            $data['company_start_date'] = $info->company_start_date;
            $data['company_end_date'] = $info->company_end_date;
            $data['admin_email'] = $info->admin_email;
            $data['admin_password'] = $info->admin_password;

          }
          $this->load->view('Admin/company_information',$data);
        }
      } else{
        header('location:'.base_url().'Login');
      }
    }

    //Update Company...
    public function update_company(){
      $company_id = $this->session->userdata('company_id');
      $roll_id = $this->session->userdata('admin_roll_id');
      if($company_id){
        $company_id = $this->input->post('company_id');
        $data = array(
          'company_name' => $this->input->post('company_name'),
          'company_address' => $this->input->post('company_address'),
          'company_city' => $this->input->post('company_city'),
          'company_state' => $this->input->post('company_state'),
          'company_district' => $this->input->post('company_district'),
          'company_pincode' => $this->input->post('company_pincode'),
          'company_statecode' => $this->input->post('company_statecode'),
          'company_mob1' => $this->input->post('company_mob1'),
          'company_mob2' => $this->input->post('company_mob2'),
          'company_email' => $this->input->post('company_email'),
          'company_website' => $this->input->post('company_website'),
          'company_pan_no' => $this->input->post('company_pan_no'),
          'company_gst_no' => $this->input->post('company_gst_no'),
          'company_lic1' => $this->input->post('company_lic1'),
          'company_lic2' => $this->input->post('company_lic2'),
          'company_start_date' => $this->input->post('company_start_date'),
          'company_end_date' => $this->input->post('company_end_date'),
          'admin_email' => $this->input->post('admin_email'),
          'admin_password' => $this->input->post('admin_password'),

        );
        $this->Admin_Model->update_info('company_id', $company_id, 'uni_company', $data);
        header('location:company_information');
      } else{
        header('location:'.base_url().'Login');
      }
    }
    // Save company Data...
    public function save_company(){
      $company_id = $this->session->userdata('company_id');
      $roll_id = $this->session->userdata('admin_roll_id');
      if($company_id){
        $data = array(
          'company_name' => $this->input->post('company_name'),
          'company_address' => $this->input->post('company_address'),
          'company_city' => $this->input->post('company_city'),
          'company_state' => $this->input->post('company_state'),
          'company_district' => $this->input->post('company_district'),
          'company_pincode' => $this->input->post('company_pincode'),
          'company_statecode' => $this->input->post('company_statecode'),
          'company_mob1' => $this->input->post('company_mob1'),
          'company_mob2' => $this->input->post('company_mob2'),
          'company_email' => $this->input->post('company_email'),
          'company_website' => $this->input->post('company_website'),
          'company_pan_no' => $this->input->post('company_pan_no'),
          'company_gst_no' => $this->input->post('company_gst_no'),
          'company_lic1' => $this->input->post('company_lic1'),
          'company_lic2' => $this->input->post('company_lic2'),
          'company_start_date' => $this->input->post('company_start_date'),
          'company_end_date' => $this->input->post('company_end_date'),
          'admin_email' => $this->input->post('admin_email'),
          'admin_password' => $this->input->post('admin_password'),
        );
        $this->Admin_Model->save_data('uni_company', $data);
        header('location:dashboard');
      } else{
        header('location:'.base_url().'Login');
      }
    }

/********************** Party Information *************************/
  // Add Party...
  public function party_information(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $this->load->view('Admin/party_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Party List
  public function party_list(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
      $this->load->view('Admin/party_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Save Party...
  public function save_party(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $party_mob1 = $this->input->post('party_mob1');
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
        'party_state' => $this->input->post('party_state'),
        'party_gst_no' => $this->input->post('party_gst_no'),
        'party_pan_no' => $this->input->post('party_pan_no'),
        'party_proriter' => $this->input->post('party_proriter'),
        'party_business' => $this->input->post('party_business'),
        'party_type' => 'party',
      );
      $check = $this->Admin_Model->check_duplication($company_id,$party_mob1,'party_mob1','uni_party');
      if($check > 0){
        $this->session->set_flashdata('check_mobile','exist');
        header('location:'.base_url().'Admin/party_information');
      }
      else{
        $this->Admin_Model->save_data('uni_party', $data);
        header('location:party_list');
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //edit Party...
  public function edit_party($id){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
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
          $data['party_state'] = $info->party_state;
          $data['party_website'] = $info->party_website;
          $data['party_gst_no'] = $info->party_gst_no;
          $data['party_pan_no'] = $info->party_pan_no;
          $data['party_proriter'] = $info->party_proriter;
          $data['party_business'] = $info->party_business;
          $data['party_status'] = $info->party_status;

        }
        $this->load->view('Admin/party_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Update Party... DB....
  public function update_party(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $party_id = $this->input->post('party_id');
      $party_mob1 = $this->input->post('party_mob1');
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
        'party_state' => $this->input->post('party_state'),
        'party_gst_no' => $this->input->post('party_gst_no'),
        'party_pan_no' => $this->input->post('party_pan_no'),
        'party_proriter' => $this->input->post('party_proriter'),
        'party_business' => $this->input->post('party_business'),
      );
      $check = $this->Admin_Model->check_duplication($company_id,$party_mob1,'party_mob1','uni_party');
      if($check > 1){
        $this->session->set_flashdata('check_mobile','exist');
        header('location:'.base_url().'Admin/edit_party/'.$party_id);
      }
      else{
        $this->Admin_Model->update_info('party_id', $party_id, 'uni_party', $data);
        header('location:party_list');
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Party...
  public function delete_party($id){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $this->Admin_Model->delete_info('party_id', $id, 'uni_party');
      header('location:../party_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** User Information *************************/
  public function add_user(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $this->load->view('Admin/add_user');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  public function user_list(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $data['user_list'] = $this->Admin_Model->get_list($company_id,'user_id','ASC','uni_user');
      $this->load->view('Admin/user_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save User...
  public function save_user(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $user_mobile = $this->input->post('user_mobile');
      $data = array(
        'company_id' => $company_id,
        'user_name' => $this->input->post('user_name'),
        'user_city' => $this->input->post('user_city'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_password' => $this->input->post('user_password'),
      );
      $check = $this->Admin_Model->check_duplication($company_id,$user_mobile,'user_mobile','uni_user');
      if($check > 0){
        $this->session->set_flashdata('check_mobile','exist');
        $this->session->set_flashdata('form_data',$data);
        header('location:'.base_url().'Admin/add_user');
      }
      else{
        $this->Admin_Model->save_data('uni_user', $data);
        header('location:user_list');
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Edit User...
  public function edit_user($id){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $user_info = $this->Admin_Model->get_info('user_id', $id, 'uni_user');
      if($user_info){
        foreach($user_info as $info){
          $data['update'] = 'update';
          $data['user_id'] = $info->user_id;
          $data['user_name'] = $info->user_name;
          $data['user_city'] = $info->user_city;
          $data['user_mobile'] = $info->user_mobile;
          $data['user_password'] = $info->user_password;
          $data['roll_id'] = $info->roll_id;
          $data['user_status'] = $info->user_status;
        }
        $this->load->view('Admin/add_user',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update User... DB...
  public function update_user(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $user_id = $this->input->post('user_id');
      $data = array(
        'user_name' => $this->input->post('user_name'),
        'user_city' => $this->input->post('user_city'),
        'user_mobile' => $this->input->post('user_mobile'),
        'user_password' => $this->input->post('user_password'),
      );
      $this->Admin_Model->update_info('user_id', $user_id, 'uni_user', $data);
      header('location:user_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete User...
  public function delete_user($id){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $this->Admin_Model->delete_info('user_id', $id, 'uni_user');
      header('location:../user_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Make Information *************************/
  //Add Make Information...
  public function make_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/make_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Make List...
  public function make_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
      $this->load->view('Admin/make_information_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Make...
  public function save_make(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'make_name' => $this->input->post('make_name'),
      );
      $this->Admin_Model->save_data('uni_make', $data);
      header('location:make_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //edit Make...
  public function edit_make($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $make_info = $this->Admin_Model->get_info('make_id', $id, 'uni_make');
      if($make_info){
        foreach($make_info as $info){
          $data['update'] = 'update';
          $data['make_id'] = $info->make_id;
          $data['make_name'] = $info->make_name;
          $data['make_status'] = $info->make_status;
        }
        $this->load->view('Admin/make_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Make... DB...
  public function update_make(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $make_id = $this->input->post('make_id');
      $data = array(
        'make_name' => $this->input->post('make_name'),
      );
      $this->Admin_Model->update_info('make_id', $make_id, 'uni_make', $data);
      header('location:make_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Make
  public function delete_make($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('make_id', $id, 'uni_make');
      header('location:../make_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Capacity Information *************************/
  // Add Capacity Information...
  public function capacity_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/capacity_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Capacity List...
  public function capacity_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['capacity_list'] = $this->Admin_Model->get_list($company_id,'capacity_id','ASC','uni_capacity');
      $this->load->view('Admin/capacity_information_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Capacity...
  public function save_capacity(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'capacity_name' => $this->input->post('capacity_name'),
      );
      $this->Admin_Model->save_data('uni_capacity', $data);
      header('location:capacity_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //edit Capacity...
  public function edit_capacity($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $make_info = $this->Admin_Model->get_info('capacity_id', $id, 'uni_capacity');
      if($make_info){
        foreach($make_info as $info){
          $data['update'] = 'update';
          $data['capacity_id'] = $info->capacity_id;
          $data['capacity_name'] = $info->capacity_name;
          $data['capacity_status'] = $info->capacity_status;
        }
        $this->load->view('Admin/capacity_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Capacity... DB...
  public function update_capacity(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $capacity_id = $this->input->post('capacity_id');
      $data = array(
        'capacity_name' => $this->input->post('capacity_name'),
      );
      $this->Admin_Model->update_info('capacity_id', $capacity_id, 'uni_capacity', $data);
      header('location:capacity_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Capacity
  public function delete_capacity($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('capacity_id', $id, 'uni_capacity');
      header('location:../capacity_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

/********************** Accuracy Information *************************/
  // Add Accuracy..
  public function accuracy_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/accuracy_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Accuracy List...
  public function accuracy_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['accuracy_list'] = $this->Admin_Model->get_list($company_id,'accuracy_id','ASC','uni_accuracy');
      $this->load->view('Admin/accuracy_information_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Accuracy...
  public function save_accuracy(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'accuracy_name' => $this->input->post('accuracy_name'),
      );
      $this->Admin_Model->save_data('uni_accuracy', $data);
      header('location:accuracy_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //edit Accuracy...
  public function edit_accuracy($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $make_info = $this->Admin_Model->get_info('accuracy_id', $id, 'uni_accuracy');
      if($make_info){
        foreach($make_info as $info){
          $data['update'] = 'update';
          $data['accuracy_id'] = $info->accuracy_id;
          $data['accuracy_name'] = $info->accuracy_name;
          $data['accuracy_status'] = $info->accuracy_status;
        }
        $this->load->view('Admin/accuracy_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Accuracy... DB...
  public function update_accuracy(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $accuracy_id = $this->input->post('accuracy_id');
      $data = array(
        'accuracy_name' => $this->input->post('accuracy_name'),
      );
      $this->Admin_Model->update_info('accuracy_id', $accuracy_id, 'uni_accuracy', $data);
      header('location:accuracy_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Accuracy
  public function delete_accuracy($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('accuracy_id', $id, 'uni_accuracy');
      header('location:../accuracy_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Class Information *************************/
  public function class_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/class_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  public function class_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['class_list'] = $this->Admin_Model->get_list($company_id,'class_id','ASC','uni_class');
      $this->load->view('Admin/class_information_list', $data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Class...
  public function save_class(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'class_name' => $this->input->post('class_name'),
      );
      $this->Admin_Model->save_data('uni_class', $data);
      header('location:class_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //edit Class...
  public function edit_class($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $make_info = $this->Admin_Model->get_info('class_id', $id, 'uni_class');
      if($make_info){
        foreach($make_info as $info){
          $data['update'] = 'update';
          $data['class_id'] = $info->class_id;
          $data['class_name'] = $info->class_name;
          $data['class_status'] = $info->class_status;
        }
        $this->load->view('Admin/class_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Class... DB...
  public function update_class(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $class_id = $this->input->post('class_id');
      $data = array(
        'class_name' => $this->input->post('class_name'),
      );
      $this->Admin_Model->update_info('class_id', $class_id, 'uni_class', $data);
      header('location:class_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Class
  public function delete_class($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('class_id', $id, 'uni_class');
      header('location:../class_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Platter Size Information *************************/
  // Add Platter Size...
  public function platter_size_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/platter_size_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Platter Size List...
  public function platter_size_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['platter_list'] = $this->Admin_Model->get_list($company_id,'platter_id','ASC','uni_platter_size');
      $this->load->view('Admin/platter_size_information_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Platter Size...
  public function save_platter(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'platter_size' => $this->input->post('platter_size'),
      );
      $this->Admin_Model->save_data('uni_platter_size', $data);
      header('location:platter_size_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Edit Platter Size...
  public function edit_platter($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $make_info = $this->Admin_Model->get_info('platter_id', $id, 'uni_platter_size');
      if($make_info){
        foreach($make_info as $info){
          $data['update'] = 'update';
          $data['platter_id'] = $info->platter_id;
          $data['platter_size'] = $info->platter_size;
          $data['platter_status'] = $info->platter_status;
        }
        $this->load->view('Admin/platter_size_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Platter Size... DB...
  public function update_platter(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $platter_id = $this->input->post('platter_id');
      $data = array(
        'platter_size' => $this->input->post('platter_size'),
      );
      $this->Admin_Model->update_info('platter_id', $platter_id, 'uni_platter_size', $data);
      header('location:platter_size_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Platter Size...
  public function delete_platter($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('platter_id', $id, 'uni_platter_size');
      header('location:../platter_size_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Division Information *************************/
  // Add Division...
  public function division_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/division_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Division List...
  public function division_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['division_list'] = $this->Admin_Model->get_list($company_id,'division_id','ASC','uni_division');
      $this->load->view('Admin/division_information_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Division...
  public function save_division(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'division_name' => $this->input->post('division_name'),
        'division_head' => $this->input->post('division_head'),
      );
      $this->Admin_Model->save_data('uni_division', $data);
      header('location:division_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //edit Division...
  public function edit_division($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $make_info = $this->Admin_Model->get_info('division_id', $id, 'uni_division');
      if($make_info){
        foreach($make_info as $info){
          $data['update'] = 'update';
          $data['division_id'] = $info->division_id;
          $data['division_name'] = $info->division_name;
          $data['division_head'] = $info->division_head;
          $data['division_status'] = $info->division_status;
        }
        $this->load->view('Admin/division_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Division... DB...
  public function update_division(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $division_id = $this->input->post('division_id');
      $data = array(
        'division_name' => $this->input->post('division_name'),
        'division_head' => $this->input->post('division_head'),
      );
      $this->Admin_Model->update_info('division_id', $division_id, 'uni_division', $data);
      header('location:division_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Division
  public function delete_division($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('division_id', $id, 'uni_division');
      header('location:../division_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Min Information *************************/
  // Add Min Information
  public function min_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/min_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Min List...
  public function min_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['min_list'] = $this->Admin_Model->get_list($company_id,'min_id','ASC','uni_min');
      $this->load->view('Admin/min_information_list', $data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Min...
  public function save_min(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'min_name' => $this->input->post('min_name'),
      );
      $this->Admin_Model->save_data('uni_min', $data);
      header('location:min_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //edit Min...
  public function edit_min($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $make_info = $this->Admin_Model->get_info('min_id', $id, 'uni_min');
      if($make_info){
        foreach($make_info as $info){
          $data['update'] = 'update';
          $data['min_id'] = $info->min_id;
          $data['min_name'] = $info->min_name;
          $data['min_status'] = $info->min_status;
        }
        $this->load->view('Admin/min_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Min... DB...
  public function update_min(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $min_id = $this->input->post('min_id');
      $data = array(
        'min_name' => $this->input->post('min_name'),
      );
      $this->Admin_Model->update_info('min_id', $min_id, 'uni_min', $data);
      header('location:min_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Min
  public function delete_min($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('min_id', $id, 'uni_min');
      header('location:../min_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Display Color Information *************************/
  // Add Display Color...
  public function display_color_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/display_color_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Display Color List
  public function display_color_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['display_color_list'] = $this->Admin_Model->get_list($company_id,'display_color_id','ASC','uni_display_color');
      $this->load->view('Admin/display_color_information_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Display Color...
  public function save_display_color(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'display_color_name' => $this->input->post('display_color_name'),
      );
      $this->Admin_Model->save_data('uni_display_color', $data);
      header('location:display_color_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Edit Display Color...
  public function edit_display_color($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $display_color_info = $this->Admin_Model->get_info('display_color_id', $id, 'uni_display_color');
      if($display_color_info){
        foreach($display_color_info as $info){
          $data['update'] = 'update';
          $data['display_color_id'] = $info->display_color_id;
          $data['display_color_name'] = $info->display_color_name;
          $data['display_color_status'] = $info->display_color_status;
        }
        $this->load->view('Admin/display_color_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Display Color... DB...
  public function update_display_color(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $display_color_id = $this->input->post('display_color_id');
      $data = array(
        'display_color_name' => $this->input->post('display_color_name'),
      );
      $this->Admin_Model->update_info('display_color_id', $display_color_id, 'uni_display_color', $data);
      header('location:display_color_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Display Color
  public function delete_display_color($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('display_color_id', $id, 'uni_display_color');
      header('location:../display_color_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Cabinet Color Information *************************/
  // Add Cabinet Color
  public function cabinet_color_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/cabinet_color_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Cabinet Color list
  public function cabinet_color_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['cabinet_color_list'] = $this->Admin_Model->get_list($company_id,'cabinet_color_id','ASC','uni_cabinet_color');
      $this->load->view('Admin/cabinet_color_information_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Cabinet Color...
  public function save_cabinet_color(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'cabinet_color_name' => $this->input->post('cabinet_color_name'),
      );
      $this->Admin_Model->save_data('uni_cabinet_color', $data);
      header('location:cabinet_color_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Edit Cabinet Color...
  public function edit_cabinet_color($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $cabinet_color_info = $this->Admin_Model->get_info('cabinet_color_id', $id, 'uni_cabinet_color');
      if($cabinet_color_info){
        foreach($cabinet_color_info as $info){
          $data['update'] = 'update';
          $data['cabinet_color_id'] = $info->cabinet_color_id;
          $data['cabinet_color_name'] = $info->cabinet_color_name;
          $data['cabinet_color_status'] = $info->cabinet_color_status;
        }
        $this->load->view('Admin/cabinet_color_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Cabinet Color... DB...
  public function update_cabinet_color(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $cabinet_color_id = $this->input->post('cabinet_color_id');
      $data = array(
        'cabinet_color_name' => $this->input->post('cabinet_color_name'),
      );
      $this->Admin_Model->update_info('cabinet_color_id', $cabinet_color_id, 'uni_cabinet_color', $data);
      header('location:cabinet_color_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Cabinet Color
  public function delete_cabinet_color($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('cabinet_color_id', $id, 'uni_cabinet_color');
      header('location:../cabinet_color_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Unit Information *************************/
  // Add Unit...
  public function unit_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/unit_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Unit List...
  public function unit_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['unit_list'] = $this->Admin_Model->get_list($company_id,'unit_id','ASC','uni_unit');
      $this->load->view('Admin/unit_information_list',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Save Unit...
  public function save_unit(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'unit_name' => $this->input->post('unit_name'),
      );
      $this->Admin_Model->save_data('uni_unit', $data);
      header('location:unit_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Edit Unit...
  public function edit_unit($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $unit_info = $this->Admin_Model->get_info('unit_id', $id, 'uni_unit');
      if($unit_info){
        foreach($unit_info as $info){
          $data['update'] = 'update';
          $data['unit_id'] = $info->unit_id;
          $data['unit_name'] = $info->unit_name;
          $data['unit_status'] = $info->unit_status;
        }
        $this->load->view('Admin/unit_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Unit... DB...
  public function update_unit(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $unit_id = $this->input->post('unit_id');
      $data = array(
        'unit_name' => $this->input->post('unit_name'),
      );
      $this->Admin_Model->update_info('unit_id', $unit_id, 'uni_unit', $data);
      header('location:unit_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Unit
  public function delete_unit($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('unit_id', $id, 'uni_unit');
      header('location:../unit_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Accessories Information *************************/
  // Add Accessories...
  public function accessories_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/accessories_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Accessories List...
  public function accessories_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['accessories_list'] = $this->Admin_Model->get_list($company_id,'accessories_id','ASC','uni_accessories');
      $this->load->view('Admin/accessories_information_list', $data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  //Save Accessories...
  public function save_accessories(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'accessories_name' => $this->input->post('accessories_name'),
      );
      $this->Admin_Model->save_data('uni_accessories', $data);
      header('location:accessories_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Edit Accessories...
  public function edit_accessories($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $accessories_info = $this->Admin_Model->get_info('accessories_id', $id, 'uni_accessories');
      if($accessories_info){
        foreach($accessories_info as $info){
          $data['update'] = 'update';
          $data['accessories_id'] = $info->accessories_id;
          $data['accessories_name'] = $info->accessories_name;
          $data['accessories_status'] = $info->accessories_status;
        }
        $this->load->view('Admin/accessories_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Accessories... DB...
  public function update_accessories(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $accessories_id = $this->input->post('accessories_id');
      $data = array(
        'accessories_name' => $this->input->post('accessories_name'),
      );
      $this->Admin_Model->update_info('accessories_id', $accessories_id, 'uni_accessories', $data);
      header('location:accessories_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Accessories
  public function delete_accessories($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('accessories_id', $id, 'uni_accessories');
      header('location:../accessories_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Std Narration Information *************************/
  // Add Std Narration...
  public function std_narration_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/std_narration_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Std Narration List...
  public function std_narration_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['std_narration_list'] = $this->Admin_Model->get_list($company_id,'std_narration_id','ASC','uni_std_narration');
      $this->load->view('Admin/std_narration_information_list', $data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Save Std Narration...
  public function save_std_narration(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'std_narration_name' => $this->input->post('std_narration_name'),
      );
      $this->Admin_Model->save_data('uni_std_narration', $data);
      header('location:std_narration_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Edit Std Narration...
  public function edit_std_narration($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $std_narration_info = $this->Admin_Model->get_info('std_narration_id', $id, 'uni_std_narration');
      if($std_narration_info){
        foreach($std_narration_info as $info){
          $data['update'] = 'update';
          $data['std_narration_id'] = $info->std_narration_id;
          $data['std_narration_name'] = $info->std_narration_name;
          $data['std_narration_status'] = $info->std_narration_status;
        }
        $this->load->view('Admin/std_narration_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Std Narration... DB...
  public function update_std_narration(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $std_narration_id = $this->input->post('std_narration_id');
      $data = array(
        'std_narration_name' => $this->input->post('std_narration_name'),
      );
      $this->Admin_Model->update_info('std_narration_id', $std_narration_id, 'uni_std_narration', $data);
      header('location:std_narration_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Std Narration...
  public function delete_std_narration($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('std_narration_id', $id, 'uni_std_narration');
      header('location:../std_narration_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Terms Conditions Information *************************/
  // Add Terms Conditions...
  public function terms_conditions_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->load->view('Admin/terms_conditions_information');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Terms Conditions list...
  public function terms_conditions_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['terms_list'] = $this->Admin_Model->get_list($company_id,'terms_id','ASC','uni_terms');
      $this->load->view('Admin/terms_conditions_information_list', $data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Save Terms Conditions...
  public function save_terms_conditions(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'terms_name' => $this->input->post('terms_name'),
      );
      $this->Admin_Model->save_data('uni_terms', $data);
      header('location:terms_conditions_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Edit Terms Conditions...
  public function edit_terms_conditions($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $terms_conditions_info = $this->Admin_Model->get_info('terms_id', $id, 'uni_terms');
      if($terms_conditions_info){
        foreach($terms_conditions_info as $info){
          $data['update'] = 'update';
          $data['terms_id'] = $info->terms_id;
          $data['terms_name'] = $info->terms_name;
          $data['terms_status'] = $info->terms_status;
        }
        $this->load->view('Admin/terms_conditions_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Terms Conditions... DB...
  public function update_terms_conditions(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $terms_id = $this->input->post('terms_id');
      $data = array(
        'terms_name' => $this->input->post('terms_name'),
      );
      $this->Admin_Model->update_info('terms_id', $terms_id, 'uni_terms', $data);
      header('location:terms_conditions_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Terms Conditions...
  public function delete_terms_conditions($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('terms_id', $id, 'uni_terms');
      header('location:../terms_conditions_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  /********************** Product Information *************************/
  public function product_information(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
      $data['capacity_list'] = $this->Admin_Model->get_list($company_id,'capacity_id','ASC','uni_capacity');
      $data['accuracy_list'] = $this->Admin_Model->get_list($company_id,'accuracy_id','ASC','uni_accuracy');
      $data['class_list'] = $this->Admin_Model->get_list($company_id,'class_id','ASC','uni_class');
      $data['platter_list'] = $this->Admin_Model->get_list($company_id,'platter_id','ASC','uni_platter_size');
      $data['quarter_list'] = $this->Admin_Model->get_list($company_id,'quarter_id','ASC','uni_quarter');
      $this->load->view('Admin/product_information', $data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  public function product_information_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data['product_list'] = $this->Admin_Model->get_product_list($company_id);
      $this->load->view('Admin/product_information_list', $data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Save Product...
  public function save_product(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $data = array(
        'company_id' => $company_id,
        'make_id' => $this->input->post('make_id'),
        'product_model_no' => $this->input->post('product_model_no'),
        'capacity_id' => $this->input->post('capacity_id'),
        'accuracy_id' => $this->input->post('accuracy_id'),
        'class_id' => $this->input->post('class_id'),
        'platter_id' => $this->input->post('platter_id'),
        'stamping_days' => $this->input->post('stamping_days'),
        'quarter_id' => $this->input->post('quarter_id'),
        // 'sale_price' => $this->input->post('sale_price'),
      );
      $this->Admin_Model->save_data('uni_product', $data);
      header('location:product_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Edit Product...
  public function edit_product($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $product_info = $this->Admin_Model->get_product_info($id);
      if($product_info){
        foreach($product_info as $info){
          $data['update'] = 'update';
          $data['product_id'] = $info->product_id;
          $data['make_id'] = $info->make_id;
          $data['make_name'] = $info->make_name;
          $data['product_model_no'] = $info->product_model_no;
          $data['capacity_id'] = $info->capacity_id;
          $data['capacity_name'] = $info->capacity_name;
          $data['accuracy_id'] = $info->accuracy_id;
          $data['accuracy_name'] = $info->accuracy_name;
          $data['class_id'] = $info->class_id;
          $data['class_name'] = $info->class_name;
          $data['platter_id'] = $info->platter_id;
          $data['platter_size'] = $info->platter_size;
          $data['quarter_id'] = $info->quarter_id;
          // $data['sale_price'] = $info->sale_price;
          $data['stamping_days'] = $info->stamping_days;
          $data['product_status'] = $info->product_status;
        }
        $data['make_list'] = $this->Admin_Model->get_list($company_id,'make_id','ASC','uni_make');
        $data['capacity_list'] = $this->Admin_Model->get_list($company_id,'capacity_id','ASC','uni_capacity');
        $data['accuracy_list'] = $this->Admin_Model->get_list($company_id,'accuracy_id','ASC','uni_accuracy');
        $data['class_list'] = $this->Admin_Model->get_list($company_id,'class_id','ASC','uni_class');
        $data['platter_list'] = $this->Admin_Model->get_list($company_id,'platter_id','ASC','uni_platter_size');
        $data['quarter_list'] = $this->Admin_Model->get_list($company_id,'quarter_id','ASC','uni_quarter');
        $this->load->view('Admin/product_information',$data);
      }
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Update Product... DB...
  public function update_product(){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $product_id = $this->input->post('product_id');
      $data = array(
        'make_id' => $this->input->post('make_id'),
        'product_model_no' => $this->input->post('product_model_no'),
        'capacity_id' => $this->input->post('capacity_id'),
        'accuracy_id' => $this->input->post('accuracy_id'),
        'class_id' => $this->input->post('class_id'),
        'platter_id' => $this->input->post('platter_id'),
        'stamping_days' => $this->input->post('stamping_days'),
        // 'sale_price' => $this->input->post('sale_price'),
        'quarter_id' => $this->input->post('quarter_id'),
      );
      $this->Admin_Model->update_info('product_id', $product_id, 'uni_product', $data);
      header('location:product_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }
  // Delete Product...
  public function delete_product($id){
    $company_id = $this->session->userdata('company_id');
    if($company_id){
      $this->Admin_Model->delete_info('product_id', $id, 'uni_product');
      header('location:../product_information_list');
    } else{
      header('location:'.base_url().'Login');
    }
  }

  public function stamping_quarter(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == ''){ header('location:'.base_url().'Login'); }

    $this->form_validation->set_rules('from_month', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_month', 'To Date', 'trim|required');
    $this->form_validation->set_rules('quarter_name', 'Quarter Name', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $save_data = array(
        'company_id' => $company_id,
        'from_month' => $this->input->post('from_month'),
        'to_month' => $this->input->post('to_month'),
        'quarter_name' => $this->input->post('quarter_name'),
      );
      $this->Admin_Model->save_data('uni_quarter', $save_data);
      header('location:'.base_url().'Admin/stamping_quarter_list');
    }
    $this->load->view('Admin/stamping_quarter');
  }

  public function stamping_quarter_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == ''){ header('location:'.base_url().'Login'); }
    $data['stamping_quarter_list'] = $this->Admin_Model->get_list($company_id,'quarter_id','ASC','uni_quarter');
    $this->load->view('Admin/stamping_quarter_list', $data);
  }

  public function edit_stamping_quarter($quarter_id){
    $company_id = $this->session->userdata('company_id');
    if($company_id == ''){ header('location:'.base_url().'Login'); }

    $this->form_validation->set_rules('from_month', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_month', 'To Date', 'trim|required');
    $this->form_validation->set_rules('quarter_name', 'Quarter Name', 'trim|required');
    if($this->form_validation->run() != FALSE){
      // $quarter_id = $this->input->post('from_month');
      $update_data = array(
        'from_month' => $this->input->post('from_month'),
        'to_month' => $this->input->post('to_month'),
        'quarter_name' => $this->input->post('quarter_name'),
      );
      // echo print_r($quarter_id);
      $this->Admin_Model->update_info('quarter_id', $quarter_id, 'uni_quarter', $update_data);
      header('location:'.base_url().'Admin/stamping_quarter_list');
    }

    $stamping_quarter_info = $this->Admin_Model->get_info('quarter_id', $quarter_id, 'uni_quarter');
    if($stamping_quarter_info == ''){ header('location:'.base_url().'Admin/stamping_quarter_list'); }
    foreach($stamping_quarter_info as $info){
      $data['update'] = 'update';
      $data['from_month'] = $info->from_month;
      $data['to_month'] = $info->to_month;
      $data['quarter_name'] = $info->quarter_name;
    }
    $this->load->view('Admin/stamping_quarter',$data);
  }

  public function delete_stamping_quarter($quarter_id){
    $company_id = $this->session->userdata('company_id');
    if($company_id == ''){ header('location:'.base_url().'Login'); }
    $this->Admin_Model->delete_info('quarter_id', $quarter_id, 'uni_quarter');
    header('location:'.base_url().'Admin/stamping_quarter_list');
  }

/************************************  Trade Business  ***********************/

  public function add_trade(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == ''){ header('location:'.base_url().'Login'); }

    $this->form_validation->set_rules('trade_name', 'Trade Name', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $save_data = array(
        'company_id' => $company_id,
        'trade_name' => $this->input->post('trade_name'),
      );
      $this->Admin_Model->save_data('uni_trade', $save_data);
      header('location:'.base_url().'Admin/trade_list');
    }
    $this->load->view('Admin/trade');
  }

  public function trade_list(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == ''){ header('location:'.base_url().'Login'); }
    $data['trade_list'] = $this->Admin_Model->get_list($company_id,'trade_id','ASC','uni_trade');
    $this->load->view('Admin/trade_list', $data);
  }

  public function edit_trade($trade_id){
    $company_id = $this->session->userdata('company_id');
    if($company_id == ''){ header('location:'.base_url().'Login'); }
    $this->form_validation->set_rules('trade_name', 'Trade Name', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $update_data = array(
        'trade_name' => $this->input->post('trade_name'),
      );
      $this->Admin_Model->update_info('trade_id', $trade_id, 'uni_trade', $update_data);
      header('location:'.base_url().'Admin/trade_list');
    }

    $trade_info = $this->Admin_Model->get_info('trade_id', $trade_id, 'uni_trade');
    if($trade_info == ''){ header('location:'.base_url().'Admin/trade_list'); }
    foreach($trade_info as $info){
      $data['update'] = 'update';
      $data['trade_name'] = $info->trade_name;
    }
    $this->load->view('Admin/trade',$data);
  }

  public function delete_trade($trade_id){
    $company_id = $this->session->userdata('company_id');
    if($company_id == ''){ header('location:'.base_url().'Login'); }
    $this->Admin_Model->delete_info('trade_id', $trade_id, 'uni_trade');
    header('location:'.base_url().'Admin/trade_list');
  }

/********************** Account of Name **********************/
public function add_ca_info(){
  $company_id = $this->session->userdata('company_id');
  if($company_id == ''){ header('location:'.base_url().'Login'); }

  $this->form_validation->set_rules('ca_info_name', 'Trade Name', 'trim|required');
  if($this->form_validation->run() != FALSE){
    $save_data = array(
      'company_id' => $company_id,
      'ca_info_name' => $this->input->post('ca_info_name'),
    );
    $this->Admin_Model->save_data('uni_ca_info', $save_data);
    header('location:'.base_url().'Admin/ca_info_list');
  }
  $this->load->view('Admin/ca_info');
}

public function ca_info_list(){
  $company_id = $this->session->userdata('company_id');
  if($company_id == ''){ header('location:'.base_url().'Login'); }
  $data['ca_info_list'] = $this->Admin_Model->get_list($company_id,'ca_info_id','ASC','uni_ca_info');
  $this->load->view('Admin/ca_info_list', $data);
}

public function edit_ca_info($ca_info_id){
  $company_id = $this->session->userdata('company_id');
  if($company_id == ''){ header('location:'.base_url().'Login'); }
  $this->form_validation->set_rules('ca_info_name', 'Trade Name', 'trim|required');
  if($this->form_validation->run() != FALSE){
    $update_data = array(
      'ca_info_name' => $this->input->post('ca_info_name'),
    );
    $this->Admin_Model->update_info('ca_info_id', $ca_info_id, 'uni_ca_info', $update_data);
    header('location:'.base_url().'Admin/ca_info_list');
  }

  $ca_info_info = $this->Admin_Model->get_info('ca_info_id', $ca_info_id, 'uni_ca_info');
  if($ca_info_info == ''){ header('location:'.base_url().'Admin/ca_info_list'); }
  foreach($ca_info_info as $info){
    $data['update'] = 'update';
    $data['ca_info_name'] = $info->ca_info_name;
  }
  $this->load->view('Admin/ca_info',$data);
}

public function delete_ca_info($ca_info_id){
  $company_id = $this->session->userdata('company_id');
  if($company_id == ''){ header('location:'.base_url().'Login'); }
  $this->Admin_Model->delete_info('ca_info_id', $ca_info_id, 'uni_ca_info');
  header('location:'.base_url().'Admin/ca_info_list');
}




  // Party Information..

}
?>
