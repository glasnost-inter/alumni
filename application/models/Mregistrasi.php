<?php
class Mregistrasi extends CI_Model {
 
    function daftar_user(){
        $baca = $this->db->get('userid');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function baca_profile($email){
        $baca = $this->db->get_where('userid', array('email' => $email));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function login_profile(){
        $email = $this->input->post('email');
        $password = $this->input->post('newpassword');
        
        $baca = $this->db->get_where('userid', array('email' => $email,'password' => $password));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function my_profile(){
        $email = $this->session->userdata('email');        
        
        $this->db->select('*');
        $this->db->from('userid a');
        $this->db->join('profile_alumni b', 'a.npm = b.npm','LEFT OUTER');
        $this->db->where('a.email', $email); 
        
        $baca = $this->db->get();
        //$baca = $this->db->get_where('userid', array('email' => $email));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }    
    
    function update_my_profile(){
                
        $npm =  $this->input->post('npm');
        
        $data = array(
                'npm' => $this->input->post('npm'),
                'nama' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'tgl_masuk' => $this->input->post('tgl_masuk'),
                'tgl_lulus' => $this->input->post('tgl_lulus'),
                'kd_fakultas' => $this->input->post('kd_fakultas'),
                'kd_jurusan' => $this->input->post('kd_jurusan'),
                'kd_peminatan' => $this->input->post('kd_peminatan'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'kd_pekerjaan' => $this->input->post('kd_pekerjaan'),
                'jabatan' => $this->input->post('jabatan'),
                'no_hp1' => $this->input->post('no_hp1'),
                'no_hp2' => $this->input->post('no_hp2'),
                'alamat_rumah' => $this->input->post('alamat_rumah'),
                'kd_kota_domisili' => $this->input->post('kd_kota_domisili'),
                'motto' => $this->input->post('motto'),
            );

        $this->db->where('npm', $npm);
        $this->db->update('profile_alumni', $data); 
    }
    
    
    function simpan_admin(){        
        $npm = $this->input->post('npm');
        
        if (isset($npm) && $npm<>''){            
            $data = array(
                   'email' => $this->input->post('email'),
                   'password' => $this->input->post('newpassword'),
                   'npm' => $this->input->post('npm')
                );
        }else{           
           $data = array(
                   'email' => $this->input->post('email'),
                   'password' => $this->input->post('newpassword'),
                ); 
        }
        
        $this->db->insert('userid', $data); 
        return $email;
    }
    
    function simpan_user(){
        
        $data1 = array(               
               'npm' => $this->input->post('npm')
            );
        
        $this->db->insert('profile_alumni', $data1); 
        
        $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('newpassword'),
                'npm' => $this->input->post('npm')
             );                
        $this->db->insert('userid', $data); 
    }
    
    function simpan_aktifitas($kodeaktifitas){
        
        $data = array(
               'kd_aktifitas' => $kodeaktifitas,
               'id_user' => $this->session->userdata('id_user'),
               'tgl_aktifitas' => date('Y-m-d')
            );

        //$this->db->where('id', $id);
        $this->db->insert('aktifitas', $data); 
    }
    
    function filter_user($email){        
        $iniemail = str_replace("%87", "@",  $email);
        $baca = $this->db->get_where('userid',array('email' => $iniemail));        
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_user(){
        $data = array(
               'password' => $this->input->post('newpassword'),
               'kd_role' => $this->input->post('kd_role'),               
            );

        $this->db->where('email', $this->input->post('email'));        
        $this->db->update('userid', $data);
    }
}
?>