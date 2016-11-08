<?php
class Msejarah extends CI_Model {
 
    function bacadata(){
        $baca = $this->db->get('sejarah');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function update_data(){
        
        $data = array(
               'ringkasan_sejarah' => $this->input->post('ringkasan_sejarah'), 
               'isi_sejarah' => $this->input->post('isi_sejarah'), 
               'id_user_update' => $this->session->userdata('id_user'),
               'tgl_update' => date('Y-m-d'),               
            );
        
        $this->db->update('sejarah', $data); 
    }
     
}
?>