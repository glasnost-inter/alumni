<?php
class Mberita extends CI_Model {
    function daftar_berita(){
        $baca = $this->db->get('berita');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_berita(){
        $data = array(
               'judul' => $this->input->post('judul'),
               'detail_berita' => $this->input->post('detail_berita'),               
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );
        
        $this->db->insert('berita', $data); 
    }
    
    function delete_berita($id_berita){
        $this->db->where('id_berita', $id_berita);        
        $this->db->delete('berita'); 
    }
    
    function filter_berita($id_berita){
        $baca = $this->db->get_where('berita',array('id_berita' => $id_berita));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_berita(){
        $data = array(
               'judul' => $this->input->post('judul'),
               'detail_berita' => $this->input->post('detail_berita'),               
               'id_user_entry' => $this->session->userdata('id_user'),
               'tgl_entry' => date('Y-m-d'),
            );

        $this->db->where('id_berita', $this->input->post('id_berita'));        
        $this->db->update('berita', $data); 
    }
}
?>