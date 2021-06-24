<?php
class C_siswa extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();
        $this->load->model("M_masyarakat");
        $this->load->model("M_students");
        $this->load->model("M_kelas");
    }

    public function index(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        // $data['students'] = $this->M_students->get_data();
        if ($this->session->userdata('level')== 1) {
            $data['students'] = $this->db->query('SELECT students.*,classesses.* from students left join classesses on students.classess_id_kelas = classesses.id_kelas')->result_array();
        }
        if ($this->session->userdata('level')== 2) {
            $data['students'] = $this->db->query('SELECT students.*,classesses.* from students left join classesses on students.classess_id_kelas = classesses.id_kelas')->result_array();
        }
        
        if ($this->session->userdata('level')== 3) {
            $data['students'] = $this->db->query('SELECT students.*,classesses.* from students left join classesses on students.classess_id_kelas = classesses.id_kelas join users on students.user_id = users.id_user WHERE students.user_id ='.$this->session->userdata('id_user').'')->result_array();
        }
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'siswa', $data);
        }else{
            redirect('C_login');
        }
    }

    public function tambahsiswa(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['classesses'] = $this->M_kelas->get_data();
        if ($this->session->userdata('level')==1) {
            $this->template->load('template', 'addsiswa',$data);
        }else{
            redirect('C_login');
        }
    }

    private function _uploadimages(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $this->input->post('nama',true);
        $config['overwrite']			= true;
        $config['max_size']             = 2048; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('thumbnail')) {
            return $this->upload->data("file_name");
        }

    }

    public function savesiswa(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama','Nama','is_unique[students.nama]|required');
        $this->form_validation->set_rules('nis','Nis','is_unique[students.nis]|required');
        $this->form_validation->set_rules('nisn','NISN','is_unique[students.nisn]|required');
        if ($this->form_validation->run() == false) {
            
            // $this->session->set_flashdata('fail','Tidak Berhasil Ditambahkan');
            ?>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
            <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/sweetalert2.min.js') ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
            <body></body>
            <script>
            // var flashdata = $('.flash-data').data('flashdata');
            // console.log(flashdata);
            // if (flashdata) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'data tidak berhasil ditambahkan ',
                    footer: '<ul class="list-group"><li class="list-group-item"><?= form_error('nisn','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('nis','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('nama','<small class="text-danger pl-3">,</small>'); ?></li></ul>'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_siswa/tambahsiswa'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->template->load('template', 'addsiswa',$data);
           
        }
        else{
            $datauser = array(
                'nama' => $this->input->post('nama', true),
                'email' => 'student'.$this->input->post('nis',true).'@schoolemail.com',
                'pass' => password_hash('belanegara',PASSWORD_ARGON2I),
                'level' => 3,
                'status' => 0
            );
    
            $this->db->insert('users', $datauser);
            $data['user'] = $this->db->get_where('users',['email' => 'student'.$this->input->post('nis',true).'@schoolemail.com'])->row_array();
            $datasiswa = array(
                'nisn' => $this->input->post('nisn', true),
                'nis' => $this->input->post('nis', true),
                'fotopath' => $this->_uploadimages(),
                'classess_id_kelas' => $this->input->post('classess_id_kelas',true),
                'user_id' => $data['user']['id_user'],
                'nama' => $this->input->post('nama', true),
                'tempat_lahir' => $this->input->post('tempat_lahir',true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir',true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin',true),
                'agama' => $this->input->post('agama',true),
                'alamat' => $this->input->post('alamat',true),
                'nama_ibu' => $this->input->post('nama_ibu',true),
                'no_tlp' => $this->input->post('no_tlp', true),
                'status' => 'Aktif',
                'created_at' => date('Y-m-d H:i:s',now()),
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->insert('students', $datasiswa);
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
                        window.location='<?php echo site_url('C_siswa'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
        
    }

    public function viewsiswa($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['students'] = $this->db->query('SELECT students.*,classesses.* from students left join classesses on students.classess_id_kelas = classesses.id_kelas WHERE students.nis = '.$id.'')->row_array();
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'viewsiswa', $data);
        }else{
            redirect('C_login');
        }
    }

    public function editsiswa($id){
        
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['students']= $this->db->get_where('students',[ 'nis' => $id])->row_array();
        $data['classesses'] = $this->M_kelas->get_data();
        $id_kelas = $data['students']['classess_id_kelas'];
        $data['classess_students']= $this->db->get_where('classesses',['id_kelas' => $id_kelas])->row_array();
        if ($this->session->userdata('level')==1) {
            $this->template->load('template', 'editsiswa',$data);
        }else{
            redirect('C_login');
        }
    }



    public function edit(){
        $id = $this->input->post('id',true);
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['students']= $this->db->get_where('students',[ 'nis' => $id])->row_array();

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nis','Nis','required');
        $this->form_validation->set_rules('nisn','NISN','required');
        if ($this->form_validation->run() == false) {
            
            // $this->session->set_flashdata('fail','Tidak Berhasil Ditambahkan');
            ?>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
            <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/sweetalert2.min.js') ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
            <body></body>
            <script>
            // var flashdata = $('.flash-data').data('flashdata');
            // console.log(flashdata);
            // if (flashdata) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'data tidak berhasil diupdate ',
                    footer: '<ul class="list-group"><li class="list-group-item"><?= form_error('nisn','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('nis','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('nama','<small class="text-danger pl-3">,</small>'); ?></li></ul>'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_siswa');?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->template->load('template', 'addsiswa',$data);
           
        }
        else{
            if ($this->input->post('status') == 'Aktif') {
                $status = 0;
            }else {
                $status = 1;
            }
            $datauser = array(
                'nama' => $this->input->post('nama', true),
                'email' => 'student'.$this->input->post('nis',true).'@schoolemail.com',
                'pass' => password_hash('belanegara',PASSWORD_ARGON2I),
                'level' => 3,
                'status' => $status
            );
            $this->db->where('id_user', $data['students']['user_id']);
            $this->db->update('users', $datauser);
            $data['user'] = $this->db->get_where('users',['email' => 'student'.$this->input->post('nis').'@schoolemail.com'])->row_array();
            if ($data['students']['fotopath'] == null) {
                $masuk = $this->_uploadimages();
            }else{
                $masuk = $data['students']['fotopath'];
            }
            $datasiswa = array(
                'nisn' => $this->input->post('nisn', true),
                'nis' => $this->input->post('nis', true),
                'fotopath' => $masuk,
                'classess_id_kelas' => $this->input->post('classess_id_kelas',true),
                'user_id' => $data['user']['id_user'],
                'nama' => $this->input->post('nama', true),
                'tempat_lahir' => $this->input->post('tempat_lahir',true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir',true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin',true),
                'agama' => $this->input->post('agama',true),
                'alamat' => $this->input->post('alamat',true),
                'nama_ibu' => $this->input->post('nama_ibu',true),
                'no_tlp' => $this->input->post('no_tlp', true),
                'status' => $this->input->post('status', true),
                'created_at' => $data['students']['created_at'],
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->where('nisn',$this->input->post('nisn',true));
            $this->db->update('students', $datasiswa);
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
                        window.location='<?php echo site_url('C_siswa'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
        
    }

    public function delete($id){
        $this->db->where('id_user', $id);
        $this->db->delete('users');

        $this->db->where('user_id', $id);
        $this->db->delete('students');
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
                        window.location='<?php echo site_url('C_siswa'); ?>'
                    }
                })
            // }
            </script>
            <?php
    }




}

?>