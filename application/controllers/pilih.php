<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilih extends CI_Controller {
    function __construct()   
    {   
        parent::__construct();
        //load helper
        $this->load->helper('url');   
        $this->load->helper('form'); 
        //load library  
        $this->load->library('form_validation');  
        //load model 
        $this->load->model('model_pilih');
        $this->load->model('CetakModel');   
    }  

    public function detil($nik = '')   
    {   
        //Cek apakah ada parameter $nik
        if ('' == $nik) {
            //jika tidak ada, maka alihkan ke halaman daftar staff_kepatuhan
            redirect('staff_kepatuhan');
        }

        //ambil data mahasisa berdasarkan nik
        $data['staff_kepatuhan'] =  $this->model_pilih->get_by_nik($nik)->row_array();

        //load form edit
        $this->load->view('pilih/detil',$data);   
    }   
}