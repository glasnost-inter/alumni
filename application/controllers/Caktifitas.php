<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caktifitas extends CI_Controller {

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
        
        public function simpan_aktifitas($kodeaktifitas)
	{		
            $data['judul']="Aktifitas";
            
            $this->load->model('maktifitas');
            $data['hasil'] = $this->maktifitas->simpan_data($kodeaktifitas);            
            
            $this->load->view('__header');
            $this->load->view('__navigation');
            $this->load->view('aktifitas/view_aktifitas',$data);
            $this->load->view('__footer');
	}
        
}
