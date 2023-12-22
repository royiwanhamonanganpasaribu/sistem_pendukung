<?php 

class Model_ket extends CI_Model{
 
 public function __construct(){
  parent::__construct();
 }
 

 public function Lihat_Ket(){
  $query = $this->db->query("SELECT  * FROM tbl_informasi  WHERE ket='Memadai'");
     return $query;
	 
	 
 } 
 // ---------------------------------------------------------------------------
 public function jumlah_memadai(){
  $query = $this->db->query("SELECT * FROM tbl_informasi  WHERE ket='Memadai'");
  return $query->num_rows();
 }
  public function jumlah_tidak_memadai(){
  $query = $this->db->query("SELECT * FROM tbl_informasi  WHERE ket='Tidak Memadai'");
  return $query->num_rows();
 }
}
