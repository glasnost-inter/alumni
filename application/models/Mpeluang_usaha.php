<?php
class Mpeluang_usaha extends CI_Model {
    function daftar_peluang_usaha(){
        $baca = $this->db->get('peluang_usaha');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_peluang(){
        $data = array(
               'company_name' => $this->input->post('company_name'),
               'jenis_usaha' => $this->input->post('jenis_usaha'),
               'company_profile' => $this->input->post('company_profile'),
               'syarat' => $this->input->post('syarat'),
               'tata_cara' => $this->input->post('tata_cara'),
               'valid_until' => $this->input->post('valid_until'),
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );
        
        $this->db->insert('peluang_usaha', $data); 
    }
    
    function delete_peluang($id_peluang){
        $this->db->where('idpeluang_usaha', $id_peluang);        
        $this->db->delete('peluang_usaha'); 
    }
    
    function filter_peluang($id_peluang){
        $baca = $this->db->get_where('peluang_usaha',array('idpeluang_usaha' => $id_peluang));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_peluang(){
        $data = array(
               'company_name' => $this->input->post('company_name'),
               'jenis_usaha' => $this->input->post('jenis_usaha'),
               'company_profile' => $this->input->post('company_profile'),
               'syarat' => $this->input->post('syarat'),
               'tata_cara' => $this->input->post('tata_cara'),
               'valid_until' => $this->input->post('valid_until'),
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );

        $this->db->where('idpeluang_usaha', $this->input->post('idpeluang_usaha'));        
        $this->db->update('peluang_usaha', $data); 
    }
}
?>