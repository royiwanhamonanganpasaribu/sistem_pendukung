<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pilih extends CI_Model {


		function get_by_nik($nik)
	{
		//SELECT * FROM tabel_mahasiswa WHERE nik=$nik
		$this->db->where('nik', $nik);
		$this->db->from('tbl_kelayakan');
		return $this->db->get();
	}
}