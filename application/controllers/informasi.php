<?php

class Informasi extends CI_Controller{
 
 public function __construct(){
  parent::__construct();
  $this->load->model('model_ket');
 }
 
 public function index(){
  redirect('ket/ket');
 }
 
 public function lihat(){  
 $isi['data']            = $this->db->get('tbl_informasi');
  $isi['ket'] = $this->model_ket->Lihat_ket();
  $isi['memadai'] = $this->model_ket->jumlah_memadai(); 
   $isi['tidak_memadai'] = $this->model_ket->jumlah_tidak_memadai(); 
  
  $config['total_rows'] = $isi['memadai'];
 
 
        $this->load->view('staff_kepatuhan/informasi/lihat', $isi);
 }
 public function logout() {
		
      // create the data object
      $data = new stdClass();
      
      if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            
            // remove session datas
            foreach ($_SESSION as $key => $value) {
                  unset($_SESSION[$key]);
            }
            
            // user logout ok
            $this->load->view('tampilan_login'); 
            
      } else {
            
            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');
            
      }
      
}
}
