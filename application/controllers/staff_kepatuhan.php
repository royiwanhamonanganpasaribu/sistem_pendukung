<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_kepatuhan extends CI_Controller {
    function __construct()   
    {   
        parent::__construct();
        //load helper
        $this->load->helper('url');   
        $this->load->helper('form'); 
        //load library  
        $this->load->library('form_validation');  
        //load model 
        $this->load->model('model_staff_kepatuhan');
        $this->load->model('CetakModel');   
    }  
    public function entry()
    {
    
        $isi['content']            = 'staff_kepatuhan/entry';
        $this->load->view('staff_kepatuhan/entry', $isi);

    }
	public function index()
	{
         $ket = 'Semua Data cetak';
            $url_cetak = 'cetak/cetak';
            $cetak = $this->CetakModel->view_all(); // Panggil fungsi view_all yang ada di CetakModel

		
      
        $data['transaksi'] = $transaksi;
        $data['nik'] = $this->cetak->nik();
        $this->load->view('staff_kepatuhan/view', $data);
	}

    
  public function cetak($nik = '')   
    {   
        //Cek apakah ada parameter $nik
        if ('' == $nik) {
            //jika tidak ada, maka alihkan ke halaman daftar staff_kepatuhan
            redirect('staff_kepatuhan');
            $dompdf = new DOMPDF();
            $dompdf->load_html($html);
            $dompdf->render();
            $dompdf->stream('Data_'.$staff_kepatuhan['nik'].'.pdf'); 
             $this->load->library('dompdf/dompdf_config.inc');
        }

        //ambil data mahasisa berdasarkan nik
        $data['staff_kepatuhan'] =  $this->model_staff_kepatuhan->get_by_nik($nik)->row_array();

       
        $this->load->view('staff_kepatuhan/print',$data);   

    }   

	public function simpan()
	{
		

		 
		$nik  = $this->input->post('nik');
        $nama    =  $this->input->post('nama');
        $ktp    = $this->input->post('ktp');
        $kk = $this->input->post('kk');
        $surat_nikah    =  $this->input->post('surat_nikah');
        $slip_gaji  = $this->input->post('slip_gaji');
        $surat_jaminan  = $this->input->post('surat_jaminan');
        $rek_listrik    =  $this->input->post('rek_listrik');
        $npwp    =  $this->input->post('npwp');  




        $data =array (
                 'nik'   => $nik,
            'nama'       => $nama,
            'ktp'          => $ktp,
            'kk'           => $kk,
            'surat_nikah'        => $surat_nikah,
            'slip_gaji'        => $slip_gaji,
         'surat_jaminan'   => $surat_jaminan,
            'rek_listrik'       => $rek_listrik,
            'npwp'          => $npwp
        );

        $this->model_staff_kepatuhan->tambah_gambar($data , 'tbl_kelayakan');
        redirect('staff_kepatuhan/lihat');
    }
    public function lihat()
    {
        
        $isi['data']            = $this->db->get('tbl_kelayakan');
        $this->load->view('staff_kepatuhan/lihat', $isi);
    }
	public function delete()
    {
        $this->load->model('model_staff_kepatuhan');

        $key=$this->uri->segment(3);
        $this->db->where('nik', $key);
        $query = $this->db->get('tbl_kelayakan');

        if($query->num_rows()>0)
        {
            $this->model_staff_kepatuhan->getdelete($key);
        }
        redirect('staff_kepatuhan/lihat');

    }
    public function edit($nik = '')   
    {   
        //Cek apakah ada parameter $nik
        if ('' == $nik) {
            //jika tidak ada, maka alihkan ke halaman daftar staff_kepatuhan
            redirect('staff_kepatuhan');
        }

        //ambil data mahasisa berdasarkan nik
        $data['staff_kepatuhan'] =  $this->model_staff_kepatuhan->get_by_nik($nik)->row_array();

        //load form edit
        $this->load->view('staff_kepatuhan/edit',$data);   
    }   

    public function update()
    {
        
        $key = $this->input->post('nik');
        $data['nik']    = $this->input->post('nik');
        $data['ktp']       = $this->input->post('ktp');
        $data['nama']       = $this->input->post('nama');
        $data['kk']    = $this->input->post('kk');
        $data['surat_nikah']       = $this->input->post('surat_nikah');
        $data['slip_gaji']    = $this->input->post('slip_gaji');
        $data['surat_jaminan']        = $this->input->post('surat_jaminan');
        $data['rek_listrik']       = $this->input->post('rek_listrik'); 
        $data['npwp']       = $this->input->post('npwp'); 
       
        $this->load->model('Model_staff_kepatuhan');
        $query = $this->Model_staff_kepatuhan->getdata($key);
        if($query->num_rows()>0)
        {
            $this->Model_staff_kepatuhan->getupdate($key, $data);
            $this->session->set_flashdata('info', 'Data sukses di update');
        } 
        redirect('Staff_kepatuhan/lihat');
    }     
	 
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			$this->load->view('tampilan_login'); 
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}
  
}
