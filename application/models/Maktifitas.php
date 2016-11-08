<?php
class Maktifitas extends CI_Model {            
    
    function simpan_data($kodeaktifitas){       
        
        $data = array(
               'kdaktifitas' => $kodeaktifitas,
               'id_user' => $this->session->userdata('id_user'),
               'tgl_aktifitas' => date('Y-m-d')
            );
        
        $this->db->insert('aktifitas', $data); 
    }
}
?>