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
}
?>
