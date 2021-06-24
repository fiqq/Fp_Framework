<?php
class C_guru extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();
        $this->load->model("M_masyarakat");
        $this->load->model("M_students");
        $this->load->model("M_teachers");
    }

    public function index(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['teachers'] = $this->M_teachers->get_data();
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'guru', $data);
        }else{
            redirect('C_login');
        }
    }

    public function viewguru($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        // $data['teachers']= $this->db->get_where('teachers',[ 'nip' => $id])->row_array();
        $data['teachers'] = $this->db->query('SELECT teachers.*,classesses.* from teachers join classesses on teachers.classess_id_kelas = classesses.id_kelas WHERE teachers.nip = '.$id.'')->row_array();
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'viewguru', $data);
        }else{
            redirect('C_login');
        }
    }

    public function getguru(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['mapels'] = $this->db->get('mapels')->result_array();
        if ($this->session->userdata('level')==1) {
            $this->template->load('template', 'tambahguru',$data);
        }else{
            redirect('C_login');
        }
    }

    private function _uploadimages(){
        $config['upload_path']          = './uploads/guru/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $this->input->post('nama',true);
        $config['overwrite']			= true;
        $config['max_size']             = 2048; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('thumbnail')) {
            return $this->upload->data("file_name");
        }

    }

    public function saveguru(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nip','Nip','is_unique[teachers.nip]|required');
        $this->form_validation->set_rules('email','Email','is_unique[teachers.email]|required|valid_email');
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
                    footer: '<ul class="list-group"><li class="list-group-item"><?= form_error('nip','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('email','<small class="text-danger pl-3">,</small>'); ?></li></ul>'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_guru/getguru'); ?>'
                    }
                })
            </script>
            <?php
        }
        else{
            $datauser = array(
                'nama' => $this->input->post('nama', true),
                'email' => 'teacher'.$this->input->post('nip',true).'@schoolemail.com',
                'pass' => password_hash('belanegara',PASSWORD_ARGON2I),
                'level' => 2,
                'status' => 0
            );
    
            $this->db->insert('users', $datauser);
            $data['user'] = $this->db->get_where('users',['email' => 'teacher'.$this->input->post('nip',true).'@schoolemail.com'])->row_array();
            $dataguru = array(
                'nip' => $this->input->post('nip', true),
                'fotopath' => $this->_uploadimages(),
                'classess_id_kelas' => $this->input->post('classess_id_kelas',true),
                'nama' => $this->input->post('nama', true),
                'ahli' => $this->input->post('ahli', true),
                'user_id' => $data['user']['id_user'],
                'email' => $this->input->post('email', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin',true),
                'pendidikan' => $this->input->post('pendidikan',true),
                'alamat' => $this->input->post('alamat',true),
                'no_tlp' => $this->input->post('no_tlp', true),
                'status' => 'Aktif',
                'created_at' => date('Y-m-d H:i:s',now()),
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->insert('teachers', $dataguru);
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
                        window.location='<?php echo site_url('C_guru'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
        
    }

    public function editguru($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['teachers']= $this->db->get_where('teachers',[ 'nip' => $id])->row_array();
        $data['mapels'] = $this->db->get('mapels')->result_array();
        if ($this->session->userdata('level')==1) {
            $this->template->load('template', 'editguru',$data);
        }else{
            redirect('C_login');
        }
    }

    public function edit(){
        $id = $this->input->post('id',true);
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['teachers']= $this->db->get_where('teachers',[ 'nip' => $id])->row_array();
        $this->form_validation->set_rules('nip','Nip','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
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
                    footer: '<ul class="list-group"><li class="list-group-item"><?= form_error('nip','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('email','<small class="text-danger pl-3">,</small>'); ?></li></ul>'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_guru');?>'
                    }
                })
            </script>
            <?php     
        }
        else{
            if ($this->input->post('status') == 'Aktif') {
                $status = 0;
            }else {
                $status = 1;
            }
            $datauser = array(
                'nama' => $this->input->post('nama', true),
                'email' => 'teacher'.$this->input->post('nip',true).'@schoolemail.com',
                'pass' => password_hash('belanegara',PASSWORD_ARGON2I),
                'level' => 2,
                'status' => $status
            );
            $this->db->where('id_user', $data['teachers']['user_id']);
            $this->db->update('users', $datauser);
            $data['user'] = $this->db->get_where('users',['email' => 'teacher'.$this->input->post('nip').'@schoolemail.com'])->row_array();
            if ($data['teachers']['fotopath'] == null) {
                $masuk = $this->_uploadimages();
            }else{
                $masuk = $data['teachers']['fotopath'];
            }
            $dataguru = array(
                'nip' => $this->input->post('nip', true),
                'fotopath' => $masuk,
                'classess_id_kelas' => $this->input->post('classess_id_kelas',true),
                'nama' => $this->input->post('nama', true),
                'ahli' => $this->input->post('ahli', true),
                'user_id' => $data['user']['id_user'],
                'email' => $this->input->post('email', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin',true),
                'pendidikan' => $this->input->post('pendidikan',true),
                'alamat' => $this->input->post('alamat',true),
                'no_tlp' => $this->input->post('no_tlp', true),
                'status' => 'Aktif',
                'created_at' => $data['teachers']['created_at'],
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->where('nip',$this->input->post('nip',true));
            $this->db->update('teachers', $dataguru);
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
                        window.location='<?php echo site_url('C_guru'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
    }

    public function hapus($id){
        $this->db->where('id_user', $id);
        $this->db->delete('users');

        $this->db->where('user_id', $id);
        $this->db->delete('teachers');
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
                    text: 'data berhasil dihapus',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='<?php echo site_url('C_guru'); ?>'
                    }
                })
            // }
            </script>
            <?php
    }



}

?>