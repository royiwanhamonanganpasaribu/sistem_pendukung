<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pencarian_informasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('cari_informasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'informasi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'informasi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'informasi/index.html';
            $config['first_url'] = base_url() . 'informasi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->cari_informasi_model->total_rows($q);
        $informasi = $this->cari_informasi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'informasi_data' => $informasi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('staff_kepatuhan/informasi/informasi_list', $data);
    }

    public function _rules() 
    {
  $this->form_validation->set_rules('name', 'name', 'trim|required');
  $this->form_validation->set_rules('author', 'author', 'trim|required');
  $this->form_validation->set_rules('isbn', 'isbn', 'trim|required');

  $this->form_validation->set_rules('id', 'id', 'trim');
  $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}