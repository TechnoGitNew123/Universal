<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_Model');
    $this->load->model('Transaction_Model');
    $this->load->model('Report_Model');
  }

  public function delivery_challan_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','delivery_challan_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['delovery_report'] = 'load';
      $data['delivery_challan_list'] = $this->Report_Model->delivery_challan_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/delivery_challan_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);

  }
// DayBook Report...
  public function daybook(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','daybook');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');

    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $data['from_date'] = $from_date;
      $data['to_date'] = $to_date;
      $data['daybook'] = 'load';
      $data['expence'] = $this->Report_Model->get_expence($company_id,$from_date,$to_date);
      $data['receipt'] = $this->Report_Model->get_receipt($company_id,$from_date,$to_date);
      $opening_expence = $this->Report_Model->opening_expence($company_id,$from_date);
      $opening_receipt = $this->Report_Model->opening_receipt($company_id,$from_date);
      $closing_expence = $this->Report_Model->opening_expence($company_id,$to_date);
      $closing_receipt = $this->Report_Model->opening_receipt($company_id,$to_date);
      $data['opening_balance'] = $opening_receipt - $opening_expence;
      $data['closing_balance'] = $closing_receipt - $closing_expence;
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/daybook',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }
// Purchase Report...
  public function purchase_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','purchase_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['purchase_report'] = 'load';
      $data['purchase_report_list'] = $this->Report_Model->purchase_report_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/purchase_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }
// Sale Report...
  public function sale_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','sale_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['sale_report'] = 'load';
      $data['sale_report_list'] = $this->Report_Model->sale_report_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/sale_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  // Gov Stamping Report...
  public function gov_stamping_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','gov_stamping_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['gov_report'] = 'load';
      $data['gov_stamping_list'] = $this->Report_Model->gov_stamping_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/gov_stamping_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  // Repairy Bill Report...
  public function repairy_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','repairy_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['repairy_report'] = 'load';
      $data['repairy_list'] = $this->Report_Model->repairy_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/repairy_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  // Quotation Report...
  public function quotation_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','quotation_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['quotation_report'] = 'load';
      $data['quotation_list'] = $this->Report_Model->quotation_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/quotation_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  // Expense Report...
  public function expense_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','expense_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $data['expense_report'] = 'load';
      $data['expense_list'] = $this->Report_Model->expense_list($company_id,$from_date,$to_date);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/expense_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  // Complaint Report...
  public function complaint_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','complaint_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['complaint_report'] = 'load';
      $data['complaint_list'] = $this->Report_Model->complaint_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/complaint_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  // Service Report...
  public function service_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','service_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['service_report'] = 'load';
      $data['service_list'] = $this->Report_Model->service_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/service_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  // Recipt Report...
  public function receipt_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','receipt_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['receipt_report'] = 'load';
      $data['receipt_list'] = $this->Report_Model->receipt_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/receipt_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  // Enquiry Report...
  public function enquiry_report(){
    $company_id = $this->session->userdata('company_id');
    if($company_id == null){ header('location:'.base_url().'Login'); }
    $this->session->set_userdata('main_menu','Report');
    $this->session->set_userdata('sub_menu','enquiry_report');
    $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');

    $this->form_validation->set_rules('from_date', 'From Date', 'trim|required');
    $this->form_validation->set_rules('to_date', 'To Date', 'trim|required');
    if($this->form_validation->run() != FALSE){
      $from_date = $this->input->post('from_date');
      $to_date = $this->input->post('to_date');
      $to_date = $this->input->post('to_date');
      $party_id = $this->input->post('party_id');
      $data['enquiry_report'] = 'load';
      $data['enquiry_list'] = $this->Report_Model->enquiry_list($company_id,$from_date,$to_date,$party_id);
    }
    $this->load->view('Admin/head',$data);
    $this->load->view('Admin/navbar',$data);
    $this->load->view('Admin/sidebar',$data);
    $this->load->view('Report/enquiry_report',$data);
    $this->load->view('Admin/footer',$data);
    $this->load->view('Admin/script',$data);
  }

  public function outstanding_report(){
    $company_id = $this->session->userdata('company_id');
    $roll_id = $this->session->userdata('admin_roll_id');
    if($company_id){
      $data['party_list'] = $this->Admin_Model->get_list($company_id,'party_id','ASC','uni_party');
      $this->load->view('Admin/head',$data);
      $this->load->view('Admin/navbar',$data);
      $this->load->view('Admin/sidebar',$data);
      $this->load->view('Report/outstanding_report',$data);
      $this->load->view('Admin/footer',$data);
      $this->load->view('Admin/script',$data);
    } else{
      header('location:'.base_url().'Login');
    }
  }
}
?>
