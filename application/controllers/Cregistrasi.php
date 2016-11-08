<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cregistrasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('email') && current_url()<>base_url('index.php') && !$this->input->post('email')) 
        {
            redirect(base_url('index.php'), 'refresh'); 
        }
    }

    public function index()
    {		

    }

    public function daftar_user()
    {		
        $data['judul']="Daftar Userid";

        $this->load->model('mregistrasi');
        $data['hasil'] = $this->mregistrasi->daftar_user();

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('registrasi/daftar_user',$data);
        $this->load->view('__footer'); 
    } 

    public function register_admin()
    {		
        $data['judul']="Registrasi Admin";

        $data['error'] = ' ';

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('registrasi/entry_admin',$data);
        $this->load->view('__footer');
    }

    public function registrasi_user()
    {		
        $data['judul']="Registrasi User";

        $data['error'] = ' ';

        //$this->load->view('__header');
        //$this->load->view('__navigation');
        $this->load->view('registrasi/registrasi_user',$data);
        //$this->load->view('__footer');
    }                

    public function registrasi_admin()
    {		
        $data['judul']="Profile";

        $this->load->model('mregistrasi');
        $email = $this->mregistrasi->simpan_admin();            
        $this->mregistrasi->simpan_aktifitas('0');  
        redirect(base_url('index.php/Cregistrasi/daftar_user'), 'refresh');   
    }

    public function simpan_registrasi_user()
    {		
        $data['judul']="Autentifikasi";

        $this->load->model('mregistrasi');
        $this->mregistrasi->simpan_user();            
        $this->mregistrasi->simpan_aktifitas('0');  
        $email = $this->input->post('email');            
        $npm = $this->input->post('npm');
        
        $data['hasil'] = $this->mregistrasi->baca_profile($email);                        

        foreach($data['hasil'] as $row){
                $id_user = $row->id_user;
                $email = $row->email;
                $npm = $row->npm;
         }

        $newdata = array(
                'id_user'     => $id_user,
                'email'     => $email,
                'npm'       => $npm,
                'logged_in' => TRUE
        );

        $this->session->set_userdata($newdata);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('profile/my_autentification',$data);
        $this->load->view('__footer');
    }

    public function update_my_profile()
    {		
        $this->load->model('mregistrasi');
        $data['hasil'] = $this->mregistrasi->update_my_profile();            
        redirect(base_url('index.php/Cregistrasi/my_profile/'), 'refresh');           
    }

    public function index_login()
    {		                                   
        $data['error'] = ' ';
        $this->load->view('registrasi/login',$data);            
    }

    public function proses_login()
    {		
        $data['judul']="Profile";

        $this->load->model('mregistrasi');
        $data['hasil'] = $this->mregistrasi->login_profile();
        //var_dump($data['hasil']);
        if(isset($data['hasil'])){

            //echo 'ini email '.$email;die;            
            foreach($data['hasil'] as $row){
                $id_user = $row->id_user;
                $email = $row->email;
                $npm = $row->npm;
            }

            $newdata = array(
                    'id_user'     => $id_user,
                    'email'     => $email,
                    'npm'       => $npm,
                    'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            $this->mregistrasi->simpan_aktifitas('1'); 
            //echo $this->session->userdata('email');
            $this->load->view('__header');
            $this->load->view('__navigation');
            $this->load->view('aktifitas/view_aktifitas',$data);
            $this->load->view('__footer');
        }else{
            $data['error'] = 'Data tidak ditemukan, silahkan registrasi jika belum melakukan, terima kasih.';
            $this->load->view('registrasi/login',$data);
        }
    }

    public function my_autentification()
    {		
        $data['judul']="Autentifikasi";

        $this->load->model('mregistrasi');
        $data['hasil'] = $this->mregistrasi->my_profile();
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('profile/my_autentification',$data);
        $this->load->view('__footer');
    }

    public function my_profile()
    {		
        $data['judul']="Profile";

        $this->load->model('mregistrasi');
        $data['hasil'] = $this->mregistrasi->my_profile();
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('profile/my_profile',$data);
        $this->load->view('__footer');
    }

    public function update_user($email)
    {		
        $data['judul']="Update User";            

        $this->load->model('mregistrasi');
        $data['hasil'] = $this->mregistrasi->filter_user($email);

        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('registrasi/update_user',$data);
        $this->load->view('__footer');
    }

    public function simpan_update_user()
    {		
        $this->load->model('mregistrasi');
        $this->mregistrasi->simpan_update_user();           
        redirect(base_url('index.php/Cregistrasi/daftar_user'), 'refresh');             
    }
        
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php'), 'refresh'); 
    }
        
}
