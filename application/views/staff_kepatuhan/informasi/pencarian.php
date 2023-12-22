<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pencarian extends CI_Controller{
 
 function __construct(){
  parent::__construct();
  
  $this->load->model('m_pencarian');
  $this->load->helper('html');
  $this->load->library('table'); 
 }
    function index() {
        $data['tampil'] = $this->m_pencarian->tampil();
        $this->load->view('tampil',$data);
        
    }
    function cari() {
       $data['tampil']=$this->m_pencarian->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('pencarian','kembali');
          }
          else {
             $this->load->view('staff_kepatuhan/tampil',$data); 

}
}
}