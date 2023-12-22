<?php
class Login_model extends CI_Model{

  function validate($user_name,$password){
    $this->db->where('user_name',$user_name);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tbl_login',1);
    return $result;
  }

}
