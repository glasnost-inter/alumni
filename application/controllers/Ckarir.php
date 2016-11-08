<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ckarir extends CI_Controller {

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

    public function daftar_karir()
    {		
        $data['judul']="Daftar Lowongan Pekerjaan";

        $this->load->model('mkarir');
        $data['hasil'] = $this->mkarir->daftar_karir();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('karir/daftar_karir',$data);
        $this->load->view('__footer'); 
    }  

    public function entry_karir()
    {		
        $data['judul']="Entry Karir";            

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('karir/entry_karir',$data);
        $this->load->view('__footer');
    }

    public function simpan_karir()
    {		
        $this->load->model('mkarir');
        $this->mkarir->simpan_karir();           
        redirect(base_url('index.php/Ckarir/daftar_karir'), 'refresh');            
    }

    public function delete_karir($id_karir)
    {		
        $this->load->model('mkarir');
        $this->mkarir->delete_karir($id_karir);                        

        redirect(base_url('index.php/Ckarir/daftar_karir'), 'refresh');    
    }

    public function update_karir($id_karir)
    {		
        $data['judul']="Update Karir";            

        $this->load->model('mkarir');
        $data['hasil'] = $this->mkarir->filter_karir($id_karir);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('karir/update_karir',$data);
        $this->load->view('__footer');
    }

    public function simpan_update_karir()
    {		
        $this->load->model('mkarir');
        $this->mkarir->simpan_update_karir();           
        redirect(base_url('index.php/Ckarir/daftar_karir'), 'refresh');            
    }
}
