<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

  function index(){
    $this->load->view('tampilan_login');
  }

  function auth(){
    $username    = $this->input->post('username',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $username = $data['user_username'];
        $level = $data['user_level'];
        $sesdata = array(
            'username'  => $name,
            'username'     => $username,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);

        if($level === '1'){
            redirect('page');

      
        }elseif($level === '2'){
            redirect('marketing/entry');

       
        }else{
            redirect('page/author');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('');
  }

}
