<?php
class Login_Model extends CI_Model{
  function check_login($email, $password){
    $query = $this->db->select('*')
        ->where('admin_email', $email)
        ->where('admin_password', $password)
        ->from('uni_company')
        ->get();
      $result = $query->result_array();
      return $result;

  }

  function check_user_login($mobile, $password){
    $query = $this->db->select('*')
        ->where('user_mobile', $mobile)
        ->where('user_password', $password)
        ->from('uni_user')
        ->get();
    $result = $query->result_array();
    return $result;
  }
}
?>
