<?php
class C_login extends CI_Controller { 

    public function __construct()
    {
        parent ::__construct();
        $this->load->model("M_login");
    }

    public function index(){
        if ($this->session->userdata('email')) {
            redirect('C_home');
        }else{
            $this->load->view('login');
        }
        
        
    }

    public function register(){
        if ($this->session->userdata('email')) {
            redirect('C_home');
        }else{
            $this->load->view('register');
        }
    }

    public function addusers(){
        if (isset($_POST['register'])) {
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('pass', 'pass', 'required|min_length[8]');
            $this->form_validation->set_rules('password_confirmation', 'password_confirmation', 'required|matches[pass]');
            if ($this->form_validation->run() == FALSE) {
                // $errors = $this->form_validation->error_array();
                // $this->session->set_flashdata('errors', $errors);
                // $this->session->set_flashdata('input', $this->input->post());
                
                $this->load->view('register');
            }else{
                $password = $this->input->post('pass',true);
                $pass = password_hash($password, PASSWORD_ARGON2I); 
                $data = [
                
                    'nama' => $this->input->post('nama',true),
                    'email' => $this->input->post('email',true),
                    'pass' => $pass,
                ];
                $this->db->insert('users', $data);
                return redirect('C_login');
            }
            
        }
        
    }

    public function login(){
        if (isset($_POST['login'])) {
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $user = $this->db->get_where('users', ['email' => $email])->row_array();
            // var_dump($user); die;
            if ($this->form_validation->run() == FALSE) {
                
                return redirect('C_login');
            }else{
                if ($user) {
                    if (password_verify($pass,$user['pass'])) {
                        $data = [
                            'id_user' => $user['id_user'],
                            'nama' => $user['nama'],
                            'email' => $user['email'],
                            'level' => $user['level'],
                        ];
                        $this->session->set_userdata($data);
                        return redirect('C_home');
                    }else{
                        $this->session->set_flashdata('flash','Password Wrong');
                        return redirect('C_login');
                    }
                }else{
                        $this->session->set_flashdata('flash','Email is not Registered');
                    
                   return redirect('C_login');
                }
            }
        }

        
    }

    public function logout(){
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('flash','You have been logout');
        return redirect('C_login');
        
    }


}

?>