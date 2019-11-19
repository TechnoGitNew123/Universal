<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Login_Model');
  }

  public function index(){
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
    	$this->load->view('admin/login');
    }
    else{
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $login = $this->Login_Model->check_login($email, $password);
      if($login == null){
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'Login');
      }
      else{
        foreach ($login as $login){
          $this->session->set_userdata('company_id', $login['company_id']);
          $this->session->set_userdata('admin_roll_id', $login['admin_roll_id']);
        }
        header('location:'.base_url().'Admin/dashboard');
      }
    }
  }

  // public function check_login(){
  //
  // }
}
?>
