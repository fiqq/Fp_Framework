<?php
class C_mapel extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();
        $this->load->model("M_masyarakat");
        $this->load->model("M_students");
        $this->load->model("M_kelas");
    }

    public function index(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        
        if ($this->session->userdata('level')== 1) {
            $data['mapel'] = $this->db->get('mapels')->result_array();
        }

        if ($this->session->userdata('level')== 2) {
            $data['mapel'] = $this->db->get('mapels')->result_array();
        }
        
        if ($this->session->userdata('level')== 3) {
            $data['mapel'] = $this->db->get('mapels')->result_array();
        }
        if ($this->session->userdata('email')) {
            $this->template->load('template', 'mapel', $data);
        }else{
            redirect('C_login');
        }
    }

    public function tambahmapel(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('level')==1) {
            $this->template->load('template', 'tambahmapel',$data);
        }else{
            redirect('C_login');
        }
    }

    public function save(){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('id_mapel','Id Mapel','is_unique[mapels.id_mapel]|required');
        $this->form_validation->set_rules('nama_mapel','Nama Mapel','required');
        $this->form_validation->set_rules('kkm','kkm','required');
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
                    footer: '<ul class="list-group"><li class="list-group-item"><?= form_error('id_mapel','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('nama_mapel','<small class="text-danger pl-3">,</small>'); ?></li><li class="list-group-item"><?= form_error('kkm','<small class="text-danger pl-3">,</small>'); ?></li></ul>'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_mapel'); ?>'
                    }
                })
            </script>
            <?php
        }
        else{
            $data['user'] = $this->db->get_where('users',['email' => 'teacher'.$this->input->post('nip',true).'@schoolemail.com'])->row_array();
            $datamapel = array(
                'id_mapel' => $this->input->post('id_mapel', true),
                'nama_mapel' => $this->input->post('nama_mapel',true),
                'kkm' => $this->input->post('kkm', true),
                'classess_id_kelas' => $this->input->post('kelas', true),
                'created_at' => date('Y-m-d H:i:s',now()),
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->insert('mapels', $datamapel);
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
                        window.location='<?php echo site_url('C_mapel'); ?>'
                    }
                })
            // }
            </script>
            <?php
            // $this->session->set_flashdata('success','Berhasil Ditambahkan');
        }
    }

    public function editmapel($id){
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['mapels']= $this->db->get_where('mapels',[ 'id_mapel' => $id])->row_array();
        $data['classesses'] = $this->M_kelas->get_data();
        if ($this->session->userdata('level')==1) {
            $this->template->load('template', 'editmapel',$data);
        }else{
            redirect('C_login');
        }
    }

    public function edit(){
        $id = $this->input->post('id',true);
        $data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_mapel','Nama Mapel','required');
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
                    footer: '<ul class="list-group"><li class="list-group-item"><?= form_error('nama_mapel','<small class="text-danger pl-3">,</small>'); ?></li></ul>'
                }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='<?php echo site_url('C_mapel');?>'
                    }
                })
            </script>
            <?php     
        }
        else{
            $data['mapels'] = $this->db->get_where('mapels',['id_mapel' => $id])->row_array();
            $datamapel = array(
                'id_mapel' => $this->input->post('id_mapel', true),
                'nama_mapel' => $this->input->post('nama_mapel', true),
                'kkm' => $this->input->post('kkm', true),
                'created_at' => $data['mapels']['created_at'],
                'updated_at' => date('Y-m-d H:i:s',now())
            );
            $this->db->where('id_mapel',$id);
            $this->db->update('mapels', $datamapel);
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
                        window.location='<?php echo site_url('C_mapel'); ?>'
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