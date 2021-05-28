<?php 

class M_masyarakat extends CI_Model {


    public function get_data(){
        return $this->db->get('masyarakat')->result_array();
    }

    public function getById($id){
        return $this->db->get_where('masyarakat', ["nik" => $id])->row();
    }

    public function savedata(){
        $data = [
            'nik' => $this->input->post('nik',true),
            'nama' => $this->input->post('nama',true),
            'alamat' => $this->input->post('alamat',true),
            'no_hp' => $this->input->post('no_hp',true),
            'jenis_vaksin' => $this->input->post('jenis_vaksin',true),
            'jadwal1' => $this->input->post('jadwal1',true),
            'jadwal2' => $this->input->post('jadwal2',true),
            'tempat' => $this->input->post('tempat',true),
        ];
        
        return $this->db->insert('masyarakat', $data);
    }

    public function updatedata(){
        $data = [
            'nik' => $this->input->post('nik',true),
            'nama' => $this->input->post('nama',true),
            'alamat' => $this->input->post('alamat',true),
            'no_hp' => $this->input->post('no_hp',true),
            'jenis_vaksin' => $this->input->post('jenis_vaksin',true),
            'jadwal1' => $this->input->post('jadwal1',true),
            'jadwal2' => $this->input->post('jadwal2',true),
            'tempat' => $this->input->post('tempat',true),
        ];
        $this->db->where('nik', $this->input->post('nik'));
        $this->db->update('masyarakat', $data);

        
    }

    public function hapusdata($id)
    {
        $this->db->delete('masyarakat', ["nik" => $id]);
    }
}

?>