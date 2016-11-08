<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprogram_kerja extends CI_Controller {

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
        $data['judul']="PROGRAM KERJA";

        $this->load->model('mprogram_kerja');
        $data['hasil'] = $this->mprogram_kerja->bacadata();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('program_kerja/program_kerja',$data);
        $this->load->view('__footer');
    }

    public function update_data_statis()
    {		
        $data['judul']="PROGRAM KERJA";

        $this->load->model('mprogram_kerja');
        $data['hasil'] = $this->mprogram_kerja->update_data();
        $data['hasil'] = $this->mprogram_kerja->bacadata();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('program_kerja/program_kerja',$data);
        $this->load->view('__footer');
    }
}
