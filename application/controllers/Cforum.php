<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cforum extends CI_Controller {

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
    
    public function daftar_forum()
    {		
        $data['judul']="Daftar Forum";

        $this->load->model('mforum');
        $data['hasil'] = $this->mforum->daftar_forum();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('forum/daftar_forum',$data);
        $this->load->view('__footer'); 
    }
    
    public function entry_forum()
    {		
        $data['judul']="Entry Forum";            

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('forum/entry_forum',$data);
        $this->load->view('__footer');
    }
    
    public function simpan_forum()
    {		
        $this->load->model('mforum');
        $this->mforum->simpan_forum();        
        redirect(base_url('index.php/Cforum/daftar_forum'), 'refresh');            
    }
    
    public function delete_forum($id_forum)
    {		
        $this->load->model('mforum');
        $this->mforum->delete_forum($id_forum);                        

        redirect(base_url('index.php/Cforum/daftar_forum'), 'refresh'); 
    }
        
    public function update_forum($id_forum)
    {		
        $data['judul']="Update Forum";            

        $this->load->model('mforum');
        $data['hasil'] = $this->mforum->filter_forum($id_forum);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('forum/update_forum',$data);
        $this->load->view('__footer');
    }   
    
    public function simpan_update_forum()
    {		
        $this->load->model('mforum');
        $this->mforum->simpan_update_forum();        
        redirect(base_url('index.php/Cforum/daftar_forum'), 'refresh');            
    }    
}
