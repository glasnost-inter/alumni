<?php
class Mkarir extends CI_Model {
    
    function daftar_karir(){
        $baca = $this->db->get('lowongan_kerja');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_karir(){
        $data = array(
               'company_name' => $this->input->post('company_name'),
               'posisi' => $this->input->post('posisi'),
               'company_profile' => $this->input->post('company_profile'),
               'syarat' => $this->input->post('syarat'),
               'tata_cara' => $this->input->post('tata_cara'),
               'valid_until' => $this->input->post('valid_until'),
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );

        //$this->db->where('id', $id);
        $this->db->insert('lowongan_kerja', $data); 
    }
    
    function delete_karir($id_karir){
        $this->db->where('id_lowongan_kerja', $id_karir);        
        $this->db->delete('lowongan_kerja'); 
    }
    
    function filter_karir($id_karir){
        $baca = $this->db->get_where('lowongan_kerja',array('id_lowongan_kerja' => $id_karir));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_karir(){
        $data = array(
               'company_name' => $this->input->post('company_name'),
               'posisi' => $this->input->post('posisi'),
               'company_profile' => $this->input->post('company_profile'),
               'syarat' => $this->input->post('syarat'),
               'tata_cara' => $this->input->post('tata_cara'),
               'valid_until' => $this->input->post('valid_until'),
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );

        $this->db->where('id_lowongan_kerja', $this->input->post('id_lowongan_kerja'));        
        $this->db->update('lowongan_kerja', $data);
    }
}
?>