<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_Model');
    $this->load->model('Transaction_Model');
    $this->load->model('Login_Model');
  }

  public function index(){
    $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
    	$this->load->view('User/login');
    }
    else{
      $mobile = $this->input->post('mobile');
      $password = $this->input->post('password');

      $login = $this->Login_Model->check_user_login($mobile, $password);
      if($login == null){
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'User');
      }
      else{
        foreach ($login as $login){
          $this->session->set_userdata('company_id', $login['company_id']);
          $this->session->set_userdata('admin_roll_id', $login['roll_id']);
        }
        header('location:'.base_url().'Admin/dashboard');
      }
    }
  }
}
?>
