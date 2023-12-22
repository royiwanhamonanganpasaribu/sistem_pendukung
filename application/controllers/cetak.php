<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('CetakModel');
	}
	public function cetak(){
          $this->load->model('model_staff_kepatuhan');
          $this->load->library('dompdf/dompdf_config.inc');

        $key=$this->uri->segment(3);
        $this->db->where('nik', $key);
        $query = $this->db->get('tbl_kelayakan`');

        if($query->num_rows()>0)
        {
            $this->model_staff_kepatuhan->getdelete($key);
        }
        redirect('staff_kepatuhan/lihat');
	}
}
