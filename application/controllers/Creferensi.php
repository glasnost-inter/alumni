<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creferensi extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')) 
        {
            redirect(base_url('index.php'), 'refresh'); 
        }
    }

    public function index()
    {		
       
    }

    public function daftar_fakultas()
    {		
        $data['judul']="Daftar Fakultas";

        $this->load->model('mreferensi');
        $data['hasil'] = $this->mreferensi->baca_data_fakultas();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/daftar_fakultas',$data);
        $this->load->view('__footer');
    }

    public function entry_fakultas()
    {		
        $data['judul']="Entry Fakultas";

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/entry_fakultas',$data);
        $this->load->view('__footer');
    }

    public function update_fakultas($kodefakultas)
    {		
        $data['judul']="Update Fakultas";

        $this->load->model('mreferensi');
        $data['hasil'] = $this->mreferensi->filter_data_fakultas($kodefakultas);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/update_fakultas',$data);
        $this->load->view('__footer');
    }

    public function simpan_data_fakultas()
    {		
        $data['judul']="Daftar Fakultas";

        $this->load->model('mreferensi');
        $this->mreferensi->simpan_data_fakultas();            
        $data['hasil'] = $this->mreferensi->baca_data_fakultas();            

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/daftar_fakultas',$data);
        $this->load->view('__footer');
    }

    public function simpan_update_data_fakultas()
    {		
        $data['judul']="Daftar Fakultas";

        $this->load->model('mreferensi');
        $this->mreferensi->simpan_update_data_fakultas();            
        $data['hasil'] = $this->mreferensi->baca_data_fakultas();            

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/daftar_fakultas',$data);
        $this->load->view('__footer');
    }                

    public function delete_fakultas($kodefakultas)
    {		
        $data['judul']="Daftar Fakultas";

        $this->load->model('mreferensi');
        $this->mreferensi->delete_data_fakultas($kodefakultas);            
        $data['hasil'] = $this->mreferensi->baca_data_fakultas();            

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/daftar_fakultas',$data);
        $this->load->view('__footer');
    }

    public function daftar_jurusan($kodefakultas)
    {		
        $data['judul']="Daftar Jurusan Fakultas";

        $this->load->model('mreferensi');
        $data['hasil'] = $this->mreferensi->filter_data_fakultas($kodefakultas);
        $data['hasil2'] = $this->mreferensi->baca_data_jurusan_fakultas($kodefakultas);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/daftar_jurusan_fakultas',$data);
        $this->load->view('__footer');
    }

    public function entry_jurusan_fakultas($kodefakultas)
    {		
        $data['judul']="Entry Jurusan Fakultas";
        
        $data['kode_fakultas'] = $kodefakultas;

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/entry_jurusan_fakultas',$data);
        $this->load->view('__footer');
    }

    public function simpan_data_jurusan_fakultas()
    {		
        
        $this->load->model('mreferensi');
        $this->mreferensi->simpan_data_jurusan_fakultas();
        $kd_fakultas = $this->input->post('kd_fakultas');
        redirect(base_url('index.php/Creferensi/daftar_jurusan/'.$kd_fakultas), 'refresh');            
    }

    public function delete_jurusan($kodefakultas,$kodejurusan)
    {		            
        $this->load->model('mreferensi');
        $this->mreferensi->delete_data_jurusan_fakultas($kodefakultas,$kodejurusan);                        

        redirect(base_url('index.php/Creferensi/daftar_jurusan/'.$kodefakultas), 'refresh');
    }

    public function update_jurusan($kodefakultas,$kodejurusan)
    {		
        $data['judul']="Update Fakultas";

        $this->load->model('mreferensi');
        $data['hasil'] = $this->mreferensi->filter_data_jurusan_fakultas($kodejurusan);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/update_jurusan_fakultas',$data);
        $this->load->view('__footer');
    }

    public function simpan_update_data_jurusan_fakultas()
    {		
        $this->load->model('mreferensi');
        $this->mreferensi->simpan_update_data_jurusan_fakultas();    
        $kd_fakultas = $this->input->post('kd_fakultas');
        redirect(base_url('index.php/Creferensi/daftar_jurusan/'.$kd_fakultas), 'refresh');
    }

    public function daftar_peminatan($kodejurusan)
    {		
        $data['judul']="Daftar Peminatan Jurusan";

        $this->load->model('mreferensi');
        $data['hasil'] = $this->mreferensi->filter_data_jurusan_fakultas($kodejurusan);
        $data['hasil2'] = $this->mreferensi->baca_data_peminatan_jurusan($kodejurusan);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/daftar_peminatan_jurusan',$data);
        $this->load->view('__footer');
    }

    public function entry_peminatan_jurusan($kodejurusan)
    {		
        $data['judul']="Entry Peminatan Jurusan";

        $data['kode_jurusan'] = $kodejurusan;

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/entry_peminatan_jurusan',$data);
        $this->load->view('__footer');
    }

    public function simpan_data_peminatan_jurusan()
    {		        
        $this->load->model('mreferensi');
        $this->mreferensi->simpan_data_peminatan_jurusan();
        $kd_fakultas = $this->input->post('kd_fakultas');
        $kd_jurusan = $this->input->post('kd_jurusan');
        redirect(base_url('index.php/Creferensi/daftar_peminatan/'.$kd_jurusan), 'refresh');            
    }

    public function update_peminatan($kodejurusan,$kodepeminatan)
    {		
        $data['judul']="Update Peminatan";

        $this->load->model('mreferensi');
        $data['kodejurusan'] = $kodejurusan;
        $data['hasil'] = $this->mreferensi->filter_data_peminatan($kodepeminatan);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('reference/update_peminatan',$data);
        $this->load->view('__footer');
    }

    public function simpan_update_data_peminatan()
    {		
        $this->load->model('mreferensi');
        $this->mreferensi->simpan_update_data_peminatan();    
        $kd_jurusan = $this->input->post('kd_jurusan');
        redirect(base_url('index.php/Creferensi/daftar_peminatan/'.$kd_jurusan), 'refresh');
    }

    public function delete_peminatan($kodejurusan,$kodepeminatan)
    {		            
        $this->load->model('mreferensi');
        $this->mreferensi->delete_data_peminatan($kodepeminatan);                                    
        redirect(base_url('index.php/Creferensi/daftar_peminatan/'.$kodejurusan), 'refresh');
    }
}
