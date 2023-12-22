<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class C_autocomplete extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auto');
	}
	var $title = 'autocomplete';
	public function index()
	{
		$data['title'] = $this->title;
		$this->load->view('v_autocomplete', $data);
	}
function get_autocomplete()
  {
    if (isset($_GET['term'])) {
      $result = $this->m_auto->get_prov($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
        $result_array[] = array(
            'label'=>$row->nik,
            'nama'=>strtoupper($row->nama)
          );
        echo json_encode($result_array);
      }
    }
  }


}

