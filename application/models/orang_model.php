<?php
class Orang_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from dbdebitur where nik like '%$cari%' ");
		return $data->result();
	}
 
 
}