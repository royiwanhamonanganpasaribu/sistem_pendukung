<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('');
    }
  }

  function index(){
      if($this->session->userdata('level')==='1'){
          $this->load->view('staff_kepatuhan/entry');
      }else{
          echo "Access Denied";
      }


  }

  function marketing(){
   
    if($this->session->userdata('level')==='2'){
      $this->load->view('marketing/dashboard_marketing');
    }else{
        echo "Access Denied";
    }
  }
    }
    
