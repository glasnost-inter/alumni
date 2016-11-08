<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpeluang_usaha extends CI_Controller {

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

    public function daftar_peluang_usaha()
    {		
        $data['judul']="Daftar Peluang Usaha";

        $this->load->model('mpeluang_usaha');
        $data['hasil'] = $this->mpeluang_usaha->daftar_peluang_usaha();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('peluang_usaha/daftar_peluang_usaha',$data);
        $this->load->view('__footer'); 
    } 

    public function entry_peluang()
    {		
        $data['judul']="Entry Peluang";            

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('peluang_usaha/entry_peluang',$data);
        $this->load->view('__footer');
    }

    public function simpan_peluang()
    {		
        $this->load->model('mpeluang_usaha');
        $this->mpeluang_usaha->simpan_peluang();            
        redirect(base_url('index.php/Cpeluang_usaha/daftar_peluang_usaha'), 'refresh');            
    }

    public function delete_peluang($id_peluang)
    {		
        $this->load->model('mpeluang_usaha');
        $this->mpeluang_usaha->delete_peluang($id_peluang);                        

        redirect(base_url('index.php/Cpeluang_usaha/daftar_peluang_usaha'), 'refresh');   
    }

    public function update_peluang($id_peluang)
    {		
        $data['judul']="Update Peluang";            

        $this->load->model('mpeluang_usaha');
        $data['hasil'] = $this->mpeluang_usaha->filter_peluang($id_peluang);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('peluang_usaha/update_peluang',$data);
        $this->load->view('__footer');
    }

    public function simpan_update_peluang()
    {		
        $this->load->model('mpeluang_usaha');
        $this->mpeluang_usaha->simpan_update_peluang();            
        redirect(base_url('index.php/Cpeluang_usaha/daftar_peluang_usaha'), 'refresh');            
    }
}
