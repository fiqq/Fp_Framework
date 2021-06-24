<?php
class C_transkip extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();
        $this->load->model("M_masyarakat");
        $this->load->model("M_students");
        $this->load->model("M_kelas");
    }

    public function index(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['students'] = $this->M_students->get_data();
        $data['students_where'] = $this->db->get_where('students',['user_id' => $this->session->userdata('id_user')])->row_array();
        $data['scores'] = $this->db->query('SELECT students.*,mapels.*,scores.* from scores right join mapels on scores.mapel_id_mapel = mapels.id_mapel JOIN students on scores.student_nisn = students.nisn WHERE students.user_id = '.$this->session->userdata('id_user').'')->result_array();
        // $data['students'] = $this->db->query('SELECT students.*,classesses.* from students join classesses on students.classess_id_kelas = classesses.id_kelas')->result_array();
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'transkip', $data);
        }else{
            redirect('C_login');
        }
    }

    public function tambahnilai($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['mapel_class'] = $this->db->query('SELECT students.*,mapels.*,classesses.* from classesses right join mapels on classesses.kelas = mapels.classess_id_kelas JOIN students on classesses.id_kelas = students.classess_id_kelas WHERE classesses.id_kelas = '.$id.'')->result_array();
        // $data['students'] = $this->db->query('SELECT students.*,classesses.* from students join classesses on students.classess_id_kelas = classesses.id_kelas')->result_array();
        $data['classesses'] = $this->db->get_where('classesses',['id_kelas' => $id])->row_array();
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'tambahnilai', $data);
        }else{
            redirect('C_login');
        }
    }

    public function tambah($id,$value){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['scoress'] = $this->db->get_where('scores',['id_score' => $id.''.$value])->row_array();
        if ($data['scoress']['id_score'] == $id.''.$value) {
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
                    footer: 'Nilai Sudah Ada'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_transkip'); ?>'
                    }
                })
            </script>
            <?php
        }
        else{
            $data['user'] = $this->db->get_where('users',['email' => 'teacher'.$this->input->post('nip',true).'@schoolemail.com'])->row_array();
            $data['mapels'] = $this->db->get_where('mapels',['id_mapel' => $value])->row_array();
            $datascore = array(
                'id_score' => $id.''.$value,
                'student_nisn' => $id,
                'mapel_id_mapel' => $value,
                'mapels_nama_mapel' => $data['mapels']['nama_mapel'],
                'nilai_tugas' => null,
                'nilai_uts' => null,
                'nilai_uas' => null,
                'created_at' => date('Y-m-d H:i:s',now()),
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->insert('scores', $datascore);
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
                        window.location='<?php echo site_url('C_transkip'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
    }

    public function viewtranskip($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['scores'] = $this->db->query('SELECT students.*,mapels.*,scores.* from scores right join mapels on scores.mapel_id_mapel = mapels.id_mapel JOIN students on scores.student_nisn = students.nisn WHERE students.nis = '.$id.'')->result_array();
        $data['students']= $this->db->get_where('students',[ 'nis' => $id])->row_array();
        if ($this->session->userdata('email')) {
          $this->template->load('template', 'viewtranskip', $data);
        }else{
            redirect('C_login');
        }
    }

    public function edittranskip($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['scores'] = $this->db->query('SELECT students.*,mapels.*,scores.* from scores right join mapels on scores.mapel_id_mapel = mapels.id_mapel JOIN students on scores.student_nisn = students.nisn WHERE students.nis = '.$id.'')->result_array();
        $data['teachers_scores'] = $this->db->query('SELECT students.*,mapels.*,scores.*,teachers.* from scores  join mapels on scores.mapel_id_mapel = mapels.id_mapel JOIN students on scores.student_nisn = students.nisn join teachers on scores.mapels_nama_mapel = teachers.ahli WHERE students.nis = '.$id.'')->result_array();
        $data['students']= $this->db->get_where('students',[ 'nis' => $id])->row_array();
        if ($this->session->userdata('email')) {
          $this->template->load('template', 'edittranskip', $data);
        }else{
            redirect('C_login');
        }
    }

    public function edit(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $k =3 ;
        if ($k != 3) {
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
                    footer: 'Gagal'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_transkip'); ?>'
                    }
                })
            </script>
            <?php
        }
        else{
        for ($i=0; $i < $this->input->post('total') ; $i++) { 
            $datascore[] = array(
                'nilai_tugas' => $this->input->post('nilai_tugas_'.$i.''),
                'nilai_uts' => $this->input->post('nilai_uts_'.$i.''),
                'nilai_uas' => $this->input->post('nilai_uas_'.$i.''),
                'created_at' => date('Y-m-d H:i:s',now()),
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->where('id_score',$this->input->post('id_'.$i.''));
            $this->db->update('scores', $datascore[$i]);
        }    
            
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
                        window.location='<?php echo site_url('C_transkip'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
    }
}

?>