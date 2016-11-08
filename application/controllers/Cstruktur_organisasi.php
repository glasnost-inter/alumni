<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cstruktur_organisasi extends CI_Controller {

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
        $data['judul']="Struktur Organisasi";

        $this->load->model('mstruktur_organisasi');
        $data['hasil'] = $this->mstruktur_organisasi->bacadata();
        $data['error']=' ';
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('struktur_organisasi/struktur_organisasi',$data);
        $this->load->view('__footer');
    }

    public function update_data_statis()
    {		            
        $data['judul']="Struktur Organisasi";

        $this->load->model('mstruktur_organisasi');
        $data['hasil'] = $this->mstruktur_organisasi->update_data();
        $data['hasil'] = $this->mstruktur_organisasi->bacadata();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('struktur_organisasi/struktur_organisasi',$data);
        $this->load->view('__footer');
    }

    public function do_upload()
    {
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('url_picture'))
        {
                $error = array('error' => $this->upload->display_errors());
                $data['error']=$error;    

                $data['judul']="Struktur Organisasi";
                $this->load->model('mstruktur_organisasi');                        
                $data['hasil'] = $this->mstruktur_organisasi->bacadata();                        

                $this->load->view('__header');
                $this->load->view('__navigation');
                $this->load->view('struktur_organisasi/struktur_organisasi',$data);
                $this->load->view('__footer');
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $filename = $data['upload_data']['file_name'];   
                $data['judul']="Struktur Organisasi";
                $this->load->model('mstruktur_organisasi');
                $this->mstruktur_organisasi->update_data($filename);
                $data['hasil'] = $this->mstruktur_organisasi->bacadata();                        
                $data['error']=' '; 
                $this->load->view('__header');
                $this->load->view('__navigation');
                $this->load->view('struktur_organisasi/struktur_organisasi',$data);
                $this->load->view('__footer');
        }
    }
}
