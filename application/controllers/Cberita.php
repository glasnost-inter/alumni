<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cberita extends CI_Controller {

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
    
    public function daftar_berita()
    {		
        $data['judul']="Daftar Berita";

        $this->load->model('mberita');
        $data['hasil'] = $this->mberita->daftar_berita();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('berita/daftar_berita',$data);
        $this->load->view('__footer'); 
    }
    
    public function entry_berita()
    {		
        $data['judul']="Entry Berita";            

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('berita/entry_berita',$data);
        $this->load->view('__footer');
    }
    
    public function simpan_berita()
    {		
        $this->load->model('mberita');
        $this->mberita->simpan_berita();        
        redirect(base_url('index.php/Cberita/daftar_berita'), 'refresh');            
    }
    
    public function delete_berita($id_berita)
	{		
            $this->load->model('mberita');
            $this->mberita->delete_berita($id_berita);                        
            
            redirect(base_url('index.php/Cberita/daftar_berita'), 'refresh');   
	}
    
    public function update_berita($id_berita)
	{		
            $data['judul']="Update Berita";            
            
            $this->load->model('mberita');
            $data['hasil'] = $this->mberita->filter_berita($id_berita);
            
            $this->load->view('__header');
            $this->load->view('__navigation');
            $this->load->view('berita/update_berita',$data);
            $this->load->view('__footer');
	}
        
    public function simpan_update_berita()
    {		
        $this->load->model('mberita');
        $this->mberita->simpan_update_berita();        
        redirect(base_url('index.php/Cberita/daftar_berita'), 'refresh');            
    }    
}
