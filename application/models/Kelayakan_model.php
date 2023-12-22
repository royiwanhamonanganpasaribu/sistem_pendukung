<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelayakan_model extends CI_Model {

    public function search_data($keyword) {
        $this->db->like('nik', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('ktp', $keyword);
        $this->db->or_like('kk', $keyword);
        $this->db->or_like('surat_nikah', $keyword);
        $this->db->or_like('slip_gaji', $keyword);
        $this->db->or_like('surat_jaminan', $keyword);
        $this->db->or_like('rek_listrik', $keyword);
        $this->db->or_like('npwp', $keyword);

        return $this->db->count_all_results('tbl_kelayakan');
    }
}