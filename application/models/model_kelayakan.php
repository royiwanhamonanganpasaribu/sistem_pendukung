<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kelayakan extends CI_Model {

	public function getdata($key)
	{
		$this->db->where('nik', $key);
		$hasil=$this->db->get('tbl_kelayakan');
		return $hasil;
	}
	public function getupdate($key, $data)
	{
		$this->db->where('nik', $key);
		$this->db->update('tbl_kelayakan', $data);
	}
	public function getinsert($data)
	{
		$this->db->insert('tbl_kelayakan', $data);
	}
	public function update_tbl_kelayakan($nik, $data)
	{
		$this->db->where('nik', $nik)->update('tbl_kelayakan', $data);
	}
	function get_all_tbl_kelayakan($perpage, $per_page, $page)
	{
		$hasil = $this->db->get('tbl_kelayakan', $per_page, $page);
		if($hasil->num_rows()>0)
		{
			return $hasil->result();
		}
		else
		{
			return false;
		}
	}
	public function getdelete($key)
	{
		$this->db->where('nik', $key);
		$this->db->delete('tbl_kelayakan');
	}
}