<?php 

class M_teachers extends CI_Model { 
    public function get_data(){
        return $this->db->get('teachers')->result_array();
    }
}