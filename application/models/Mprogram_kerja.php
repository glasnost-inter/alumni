<?php
class Mprogram_kerja extends CI_Model {
 
    function bacadata(){
        $baca = $this->db->get('program_kerja');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 
    function update_data(){        
        
        $data = array(               
               'ringkasan_program_kerja' => $this->input->post('ringkasan_program_kerja'),
               'isi_program_kerja' => $this->input->post('isi_program_kerja'),
               'id_user_update' => $this->session->userdata('id_user'),
               'tgl_update' => date('Y-m-d'),
            );
        
        $this->db->update('program_kerja', $data); 
    }
}
?>