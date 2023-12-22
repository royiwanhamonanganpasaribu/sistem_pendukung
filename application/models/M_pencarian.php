<?php
class M_pencarian extends CI_Model{
 
 function __construct(){
  parent::__construct();
 }
 function tampil(){
//$this->db->from('mahasiswa');
$query = $this->db->get('tbl_kelayakan');
return $query->result(); 
 }
 function caridata(){
$c = $this->input->POST ('cari');
$this->db->like('nik', $c);
$query = $this->db->get ('tbl_kelayakan');
return $query->result(); 
 }
 }