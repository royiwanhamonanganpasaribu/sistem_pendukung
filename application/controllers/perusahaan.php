<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{

		$this->load->view('index');
	}
	
	public function simpan()
	{
		

		$key = $this->input->post('nomor_wp');
		$data['tanggal']	= $this->input->post('tanggal');
		$data['nomor_wp']	= $this->input->post('nomor_wp');
		$data['nama_wp']		= $this->input->post('nama_wp');
		$data['alamat']	= $this->input->post('alamat');

		$this->load->model('model_perusahaan');
		$query = $this->model_perusahaan->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_perusahaan->getupdate($key, $data);
			$this->session->set_flashdata('info', 'Data sukses di update');
		}
		else 
		{
			$this->model_perusahaan->getinsert($data);
			$this->session->set_flashdata('info', 'Data sukses di simpan');
		}
		redirect('perusahaan/lihat');
	}
    public function lihat()
    {
        $isi['content']         = 'form_lihat_perusahaan';
        
        $isi['data']            = $this->db->get('perusahaan');
        $this->load->view('form_lihat_perusahaan', $isi);
    }
	public function delete()
    {
        $this->load->model('model_perusahaan');

        $key=$this->uri->segment(3);
        $this->db->where('nomor_wp', $key);
        $query = $this->db->get('perusahaan');

        if($query->num_rows()>0)
        {
            $this->model_perusahaan->getdelete($key);
        }
        redirect('perusahaan/lihat');

    }
    public function edit()
    {
         $isi['content']			= 'form_edit_perusahaan';
       
        $key=$this->uri->segment(3);
        $this->db->where('nomor_wp', $key);
        $query = $this->db->get('perusahaan');
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                $isi['tanggal']   = $row->tanggal;
                $isi['nomor_wp']    = $row->nomor_wp;
                 $isi['nama_wp']  = $row->nama_wp;
                $isi['alamat']  = $row->alamat;
                
            }
        }
        else
        {
            $isi['tanggal']   = '';
            $isi['nomor_wp']    = '';
            $isi['nama_wp']  = '';
            $isi['alamat']  = '';
        }
        $this->load->view('form_edit_perusahaan', $isi);
        
    }
}
