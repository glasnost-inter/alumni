<?php
class Mreferensi extends CI_Model {
 
    function baca_data_fakultas(){
        $baca = $this->db->get('fakultas');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function filter_data_fakultas($kodefakultas){
        $baca = $this->db->get_where('fakultas',array('kd_fakultas' => $kodefakultas));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function delete_data_fakultas($kodefakultas){
        $this->db->where('kd_fakultas', $kodefakultas);
        $this->db->delete('fakultas'); 
    }
    
    function simpan_data_fakultas(){        
        $data = array(
               'kd_fakultas' => $this->input->post('kd_fakultas'),
               'nama_fakultas' => $this->input->post('nama_fakultas'),
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );
        
        $this->db->insert('fakultas', $data); 
    }
    
    function simpan_update_data_fakultas(){

        $data = array(
               'kd_fakultas' => $this->input->post('kd_fakultas'),
               'nama_fakultas' => $this->input->post('nama_fakultas'),
               'id_user_update' => $this->session->userdata('id_user'),
               'tgl_update' => date('Y-m-d'), 
            );

        $this->db->where('kd_fakultas', $kd_fakultas);
        $this->db->update('fakultas', $data); 
    }
      
    function simpan_data_jurusan_fakultas(){
        
        $data = array(
               'kd_fakultas' => $this->input->post('kd_fakultas'),
               'kd_jurusan' => $this->input->post('kd_jurusan_fakultas'),
               'nama_jurusan' => $this->input->post('nama_jurusan'),
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );
        
        $this->db->insert('jurusan', $data); 
    }
    
    function baca_data_jurusan_fakultas($kodefakultas = null){
        $baca = $this->db->get_where('jurusan',array('kd_fakultas'=>$kodefakultas));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function delete_data_jurusan_fakultas($kodefakultas,$kodejurusan){
        $this->db->where('kd_jurusan', $kodejurusan);
        $this->db->where('kd_fakultas', $kodefakultas);
        $this->db->delete('jurusan'); 
    }
    
    function filter_data_jurusan_fakultas($kodejurusan){
        $baca = $this->db->get_where('jurusan',array('kd_jurusan' => $kodejurusan));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_data_jurusan_fakultas(){
        
        $data = array(
               'kd_fakultas' => $this->input->post('kd_fakultas'),
               'kd_jurusan' => $this->input->post('kd_jurusan'),
               'nama_jurusan' => $this->input->post('nama_jurusan'), 
               'id_user_update' => $this->session->userdata('id_user'),
               'tgl_update' => date('Y-m-d'),
            );

        $this->db->where('kd_jurusan', $kd_jurusan);
        $this->db->where('kd_fakultas', $kd_fakultas);
        $this->db->update('jurusan', $data); 
    }
    
    function baca_data_peminatan_jurusan($kodejurusan = null){
        $baca = $this->db->get_where('peminatan',array('kd_jurusan'=>$kodejurusan));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_data_peminatan_jurusan(){       
        
        $data = array(
               'kd_jurusan' => $this->input->post('kd_jurusan'),
               'kd_peminatan' => $this->input->post('kd_peminatan'),
               'nama_peminatan' => $this->input->post('nama_peminatan'),
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'), 
            );
        
        $this->db->insert('peminatan', $data); 
    }
    
    function filter_data_peminatan($kodepeminatan){
        $baca = $this->db->get_where('peminatan',array('kd_peminatan' => $kodepeminatan));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_data_peminatan(){
                
        $kd_peminatan = $this->input->post('kd_peminatan');
        
        $data = array(               
               'nama_peminatan' => $this->input->post('nama_peminatan'),
               'id_user_update' => $this->session->userdata('id_user'),
               'tgl_update' => date('Y-m-d'), 
            );

        $this->db->where('kd_peminatan', $kd_peminatan);        
        $this->db->update('peminatan', $data); 
    }
    
    function delete_data_peminatan($kodepeminatan){
        $this->db->where('kd_peminatan', $kodepeminatan);        
        $this->db->delete('peminatan'); 
    }
}
?>