<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelayakan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kelayakan_model');
    }

    public function index() {
        $this->load->view('kelayakan_search');
    }

    public function search() {
        $keyword = $this->input->post('keyword');
        $data['numrows'] = $this->Kelayakan_model->search_data($keyword);

        $this->load->view('kelayakan_search_result', $data);
    }
}