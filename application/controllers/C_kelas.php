<?php
class C_kelas extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();
        $this->load->model("M_masyarakat");
        $this->load->model("M_students");
        $this->load->model("M_teachers");
        $this->load->model("M_kelas");
    }

    public function index(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'kelas', $data);
        }else{
            redirect('C_login');
        }
    }

    public function tambahkelas($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        if ($id==10) {
            $data['classesses'] = 10;
        }elseif ($id==11) {
            $data['classesses'] = 11;
        }else{
            $data['classesses'] = 12;
        }
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'tambahkelas', $data);
        }else{
            redirect('C_login');
        }
    }


    public function save(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('id_kelas','Id kelas','is_unique[classesses.id_kelas]|required');
        $this->form_validation->set_rules('index','Index','required');
        $this->form_validation->set_rules('nama_kelas','Nama kelas','is_unique[classesses.nama_kelas]|required');
        if ($this->form_validation->run() == false) {
            ?>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
            <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/sweetalert2.min.js') ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
            <body></body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'data tidak berhasil ditambahkan ',
                    footer: '<ul class="list-group"><li class="list-group-item"><?= form_error('id_kelas','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('index','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('nama_kelas','<small class="text-danger pl-3">,</small>'); ?></li></ul>'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_kelas'); ?>'
                    }
                })
            </script>
            <?php
        }
        else{
            $data['user'] = $this->db->get_where('users',['email' => 'teacher'.$this->input->post('nip',true).'@schoolemail.com'])->row_array();
            $datakelas = array(
                'id_kelas' => $this->input->post('id_kelas', true),
                'kelas' => $this->input->post('kelas',true),
                'indexs' => $this->input->post('index',true),
                'nama_kelas' => $this->input->post('nama_kelas', true),
                'created_at' => date('Y-m-d H:i:s',now()),
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->insert('classesses', $datakelas);
            ?>
            <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/sweetalert2.min.js') ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
            <body></body>
            <script>
            // var flashdata = $('.flash-data').data('flashdata');
            // console.log(flashdata);
            // if (flashdata) {
                Swal.fire({
                    icon: 'success',
                    title: 'Yey...',
                    text: 'data berhasil ditambahkan',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='<?php echo site_url('C_kelas'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
        
    }

    public function viewkelas($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        if ($id==10) {
            $data['classesses'] = $this->db->query('SELECT * from classesses WHERE id_kelas < 1100')->result_array();
        }elseif ($id==11) {
            $data['classesses'] = $this->db->query('SELECT * from classesses WHERE id_kelas BETWEEN 1100 AND 1200 ')->result_array();
        }else{
            $data['classesses'] = $this->db->query('SELECT * from classesses WHERE id_kelas > 1200')->result_array();
        }
        
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'viewkelas', $data);
        }else{
            redirect('C_login');
        }
        
    }

    public function view($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['students'] = $this->db->get_where('students',['classess_id_kelas' => $id])->result_array();
        $data['classesses'] = $this->db->get_where('classesses',['id_kelas' => $id])->row_array();
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'datakelas', $data);
        }else{
            redirect('C_login');
        }
    }

    public function editkelas($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['students'] = $this->db->get_where('students',['classess_id_kelas' => $id])->result_array();
        $data['classesses'] = $this->db->get_where('classesses',['id_kelas' => $id])->row_array();
        $data['count_students'] = $this->db->get_where('students',['classess_id_kelas' => $id])->num_rows();
        $data['teachers']= $this->db->get_where('teachers',['classess_id_kelas' => $id])->row_array();
        $data['teachers_null']= $this->db->get_where('teachers',['classess_id_kelas' => null])->result_array();
        $data['count_teachers'] = $this->db->get_where('teachers',['classess_id_kelas' => $id])->num_rows();
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'editkelas', $data);
        }else{
            redirect('C_login');
        }
    }

    public function edit(){
        $id = $this->input->post('id',true);
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_kelas','Nama Kelas','required|is_unique[classesses.nama_kelas]');
        if ($this->form_validation->run() == false) {
            ?>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
            <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/sweetalert2.min.js') ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
            <body></body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'data tidak berhasil diupdate ',
                    footer: '<ul class="list-group"><li class="list-group-item"><?= form_error('nama_kelas','<small class="text-danger pl-3">,</small>'); ?></li></ul>'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_kelas');?>'
                    }
                })
            </script>
            <?php     
        }
        else{
            $this->db->set('classess_id_kelas', $id);
            $this->db->where('nip', $this->input->post('wali_kelas',true));
            $this->db->update('teachers');
            $data['classesses'] = $this->db->get_where('classesses',['id_kelas' => $id])->row_array();
            $dataguru = array(
                'nama_kelas' => $this->input->post('nama_kelas', true),
                'created_at' => $data['classesses']['created_at'],
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->where('id_kelas',$id);
            $this->db->update('classesses', $dataguru);
            ?>
            <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/sweetalert2.min.js') ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
            <body></body>
            <script>
            // var flashdata = $('.flash-data').data('flashdata');
            // console.log(flashdata);
            // if (flashdata) {
                Swal.fire({
                    icon: 'success',
                    title: 'Yey...',
                    text: 'data berhasil diupdate',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='<?php echo site_url('C_kelas'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
    }




}