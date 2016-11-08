<?php
class Mforum extends CI_Model {
    
    function daftar_forum(){
        $baca = $this->db->get('forum');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
        
    function simpan_forum(){
        $data = array(
               'judul' => $this->input->post('judul'),
               'isi_forum' => $this->input->post('isi_forum'),               
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );
        
        $this->db->insert('forum', $data); 
    }
    
    function delete_forum($id_forum){
        $this->db->where('id_forum', $id_forum);        
        $this->db->delete('forum'); 
    }
    
    function filter_forum($id_forum){
        $baca = $this->db->get_where('forum',array('id_forum' => $id_forum));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_forum(){
        $data = array(
               'judul' => $this->input->post('judul'),
               'isi_forum' => $this->input->post('isi_forum'),               
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );
        
        $this->db->where('id_forum', $this->input->post('id_forum'));        
        $this->db->update('forum', $data); 
    }
}
?>