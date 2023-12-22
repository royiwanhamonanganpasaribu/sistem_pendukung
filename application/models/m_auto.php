<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auto extends CI_Model 
{

public function get_prov($title)
  {
    $this->db->like('nik', $title, 'BOTH');
  
    $this->db->limit(10);
    return $this->db->get('tbl_kelayakan')->result();
  }
 }