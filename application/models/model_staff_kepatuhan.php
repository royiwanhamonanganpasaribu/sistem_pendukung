<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_staff_kepatuhan extends CI_Model {

	protected $_table = 'tbl_kelayakan';
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
		function get_by_nik($nik)
	{
		//SELECT * FROM tabel_mahasiswa WHERE nik=$nik
		$this->db->where('nik', $nik);
		$this->db->from('tbl_kelayakan');
		return $this->db->get();
	}
	function update($data, $where)
	{
		$this->db->where($where);
		$this->db->update('tbl_kelayakan', $data);
	}
	public function ubah($data, $nik)
	{
		$query = $this->db->set($data);
		$query = $this->db->where(['nik' => $nik]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	  public function tambah_gambar($data,$table){
		$this->db->insert($table,$data);
	}
}
