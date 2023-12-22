<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marketing extends CI_Controller {
    function __construct()   
    {   
        parent::__construct();        //load helper
        $this->load->helper('url');   
        $this->load->helper('form'); 
        //load library  
        $this->load->library('form_validation');  
        //load model 
        $this->load->model('model_informasi');
        $this->load->model('CetakModel');   
    }  
    var $title = 'autocomplete';
    function pencarian()
    {
         $ket = 'Semua Data cetak';
            $url_cetak = 'cetak/cetak';
            $cetak = $this->CetakModel->view_all(); // Panggil fungsi view_all yang ada di CetakModel

        $data['title'] = $this->title;
        $this->load->view('informasi/entry', $data);
      
        $data['transaksi'] = $transaksi;
        $data['nik'] = $this->cetak->nik();

                $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kelayakan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kelayakan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kelayakan/index.html';
            $config['first_url'] = base_url() . 'kelayakan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->cari_kelayakan_model->total_rows($q);
        $kelayakan = $this->cari_kelayakan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kelayakan_data' => $kelayakan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('staff_kepatuhan/kelayakan_list', $data);

    }
function get_autocomplete()
  {
    if (isset($_GET['term'])) {
      $result = $this->model_informasi->get_prov($_GET['term']);
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
 public function _rules() 
    {
  $this->form_validation->set_rules('name', 'name', 'trim|required');
  $this->form_validation->set_rules('author', 'author', 'trim|required');
  $this->form_validation->set_rules('isbn', 'isbn', 'trim|required');

  $this->form_validation->set_rules('id', 'id', 'trim');
  $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function simpan()
    {
        

        $key = $this->input->post('nik');
        $data['nik']    = $this->input->post('nik');
        $data['nama']       = $this->input->post('nama');
        $data['tempat']    = $this->input->post('tempat');
        $data['tgl_lahir'] = $this->input->post('tgl_lahir');
        $data['alamat']        = $this->input->post('alamat');
        $data['pekerjaan']  = $this->input->post('pekerjaan');
        $data['agama']  = $this->input->post('agama');
        $data['gol_darah']        = $this->input->post('gol_darah');
        $data['ket']        = $this->input->post('ket');
       

        $this->load->model('model_informasi');
        $query = $this->model_informasi->getdata($key);
        if($query->num_rows()>0)
        {
            $this->model_informasi->getupdate($key, $data);
            $this->session->set_flashdata('info', 'Data sukses di update');
        }
        else 
        {
            $this->model_informasi->getinsert($data);
            $this->session->set_flashdata('info', 'Data sukses di simpan');
        }
        redirect('marketing/lihat');
    }
     public function entry()
    {
        
        $isi['data']            = $this->db->get('tbl_informasi');
        $this->load->view('marketing/entry', $isi);
    }
    public function lihat()
    {
        
        $isi['data']            = $this->db->get('tbl_informasi');
        $this->load->view('marketing/lihat', $isi);
    }
    public function delete()
    {
        $this->load->model('model_informasi');

        $key=$this->uri->segment(3);
        $this->db->where('nik', $key);
        $query = $this->db->get('tbl_informasi`');

        if($query->num_rows()>0)
        {
            $this->model_informasi->getdelete($key);
        }
        redirect('marketing/lihat');

    }
    public function edit($nik = '')   
    {   
        //Cek apakah ada parameter $nik
        if ('' == $nik) {
            //jika tidak ada, maka alihkan ke halaman daftar marketing
            redirect('marketing');
        }

        //ambil data mahasisa berdasarkan nik
        $data['marketing'] =  $this->model_informasi->get_by_nik($nik)->row_array();

        //load form edit
        $this->load->view('marketing/edit',$data);   
    }


    public function update()   
    {
        //cek apakah tombol update ditekan
        if ($this->input->post('update')) {

            $nik = $this->input->post('nik');

            //validasi form
            $this->form_validation->set_rules('nik', 'Nik', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
            $this->form_validation->set_rules('alamat', 'Surat Nikah', 'required');            
            $this->form_validation->set_rules('pekerjaan', 'Slip Gaji/Rekening Koran ', 'required');
            $this->form_validation->set_rules('agama', 'Surat Jaminan', 'required');            
            $this->form_validation->set_rules('gol_darah', 'Rekening Listrik', 'required');    
            $this->form_validation->set_rules('ket', 'Keterangan', 'required');


            if ($this->form_validation->run() === false) {
                redirect('marketing/edit/'. $nik);
            }


            $where['nik'] = $nik;
            
            $data = [
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'agama' => $this->input->post('agama'),
                'gol_darah' => $this->input->post('gol_darah'),
                'ket' => $this->input->post('ket')
            ];

            //update data
            $this->model_informasi->update($data, $where);

            $data['msg'] = 'Data berhasil diperbaharui';
            $this->load->view('marketing/notifikasi', $data); 
            
        } else {
            echo "<h3 style='color:red;'>Forbidden access</h3>";
        } 
          
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
