<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller
{

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kelayakan');
    }
    public function cetakkelayakan($tbl_kelayakan_nik)
    {
    	$data['data'] = $this->db->get_where('tbl_kelayakan',['nik'=>$tbl_kelayakan_nik])->row();
    	$this->load->view('staff_kepatuhan/cetakkelayakan', $data);
    }
}	