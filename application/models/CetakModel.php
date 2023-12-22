<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CetakModel extends CI_Model {
	public function view_all(){
		return $this->db->get('tbl_kelayakan')->result(); // Tampilkan semua data transaksi
	}
   
}
