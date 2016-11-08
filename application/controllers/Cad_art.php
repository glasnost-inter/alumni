<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad_art extends CI_Controller {

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
            $data['judul']="AD ART";
            
            $this->load->model('mad_art');
            $data['hasil'] = $this->mad_art->bacadata();
            
            $this->load->view('__header');
            $this->load->view('__navigation');
            $this->load->view('ad_art/ad_art',$data);
            $this->load->view('__footer');
	}
        
        public function update_data_statis()
	{		
            $data['judul']="AD ART";
            
            $this->load->model('mad_art');
            $data['hasil'] = $this->mad_art->update_data();
            $data['hasil'] = $this->mad_art->bacadata();
            
            $this->load->view('__header');
            $this->load->view('__navigation');
            $this->load->view('ad_art/ad_art',$data);
            $this->load->view('__footer');
	}
        
        
}
