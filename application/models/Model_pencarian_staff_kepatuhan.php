<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_pencarian_staff_kepatuhan extends CI_Model
{

    public $table = 'tbl_kelayakan';
    public $nik = 'nik';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->nik, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by nik
    function get_by_nik($nik)
    {
        $this->db->where($this->nik, $nik);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('nik', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('ktp', $q);
        $this->db->or_like('kk', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->nik, $this->order);
        $this->db->like('nik', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('ktp', $q);
        $this->db->or_like('kk', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
}
