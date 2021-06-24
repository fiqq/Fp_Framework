<?php 

class M_kelas extends CI_Model { 
    public function get_data(){
        return $this->db->get('classesses')->result_array();
    }
}