<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_informasi extends CI_Model {

	public function getdata($key)
	{
		$this->db->where('nik', $key);
		$hasil=$this->db->get('tbl_informasi');
		return $hasil;
	}
	public function getupdate($key, $data)
	{
		$this->db->where('nik', $key);
		$this->db->update('tbl_informasi', $data);
	}
	public function getinsert($data)
	{
		$this->db->insert('tbl_informasi', $data);
	}
	public function update_tbl_informasi($nik, $data)
	{
		$this->db->where('nik', $nik)->update('tbl_informasi', $data);
	}

	function get_all_tbl_informasi($perpage, $per_page, $page)
	{
		$hasil = $this->db->get('tbl_informasi', $per_page, $page);
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
		$this->db->delete('tbl_informasi');
	}
		function get_by_nik($nik)
	{
		//SELECT * FROM tabel_mahasiswa WHERE nik=$nik
		$this->db->where('nik', $nik);
		$this->db->from('tbl_informasi');
		return $this->db->get();
	}
	function update($data, $where)
	{
		$this->db->where($where);
		$this->db->update('tbl_informasi', $data);
	}

	//otomatis
public function get_prov($title)
  {
    $this->db->like('nik', $title, 'BOTH');
  
    $this->db->limit(10);
    return $this->db->get('tbl_kelayakan')->result();
  }
  	function search($keyword) {
		$sql		= "SELECT * FROM tbl_informasi WHERE nama LIKE '%$keyword%'";
		$result	= 	$this->db->query($sql);
		
		if($result->num_rows() > 0) {
			return $result->result_array();		
		}
		else {
			return array();		
		}	
	}
}