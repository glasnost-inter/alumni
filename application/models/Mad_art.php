<?php
class Mad_art extends CI_Model {
 
    function bacadata(){
        $baca = $this->db->get('ad_art');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
     
    function update_data(){
                
        $data = array(               
               'ringkasan_ad_art' => $this->input->post('ringkasan_ad_art'),
               'isi_ad_art' => $this->input->post('isi_ad_art'),               
               'id_user_update' => $this->session->userdata('id_user'),
               'tgl_update' => date('Y-m-d'),
            );
        
        $this->db->update('ad_art', $data); 
    }
}
?>