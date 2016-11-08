<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csejarah extends CI_Controller {

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
        $data['judul']="SEJARAH IKATAN ALUMNI UNIAT";

        $this->load->model('msejarah');
        $data['hasil'] = $this->msejarah->bacadata();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('sejarah/sejarah',$data);
        $this->load->view('__footer');
    }

    public function update_data_statis()
    {		            
        $data['judul']="SEJARAH IKATAN ALUMNI UNIAT";

        $this->load->model('msejarah');
        $data['hasil'] = $this->msejarah->update_data();
        $data['hasil'] = $this->msejarah->bacadata();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('sejarah/sejarah',$data);
        $this->load->view('__footer');
    }
}
