<?php
class C_home extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();
        $this->load->model("M_masyarakat");
        $this->load->model("M_students");
    }

	public function index()
	{
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        // $data['masyarakat'] = $this->M_masyarakat->get_data();
        $data['students'] = $this->db->get_where('students',[ 'user_id' => $this->session->userdata('id_user')])->row_array();
		
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'home', $data);
        }else{
            redirect('C_login');
        }
	}

    public function datasiswa(){
        if ($this->session->userdata('email')) {
            redirect('C_siswa');
        }else{
            redirect('C_login');
        }
    }


}

