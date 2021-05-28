<?php 

class M_students extends CI_Model { 
    public function get_data(){
        return $this->db->get('students')->result_array();
    }

    public function getById($id){
        return $this->db->get_where('students', ["id" => $id])->row();
    }
}