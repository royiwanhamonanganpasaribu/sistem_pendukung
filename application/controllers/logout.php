<?php
class Logout extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('');
    }
  }

  function index(){
    $this->load->view('tampilan_login');


  }

 
    }
    
