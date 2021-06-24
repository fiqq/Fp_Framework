<?php if ($user['level']==1) {  ?>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Siswa   
                    <a class="float-right btn btn-success" href="<?php echo base_url('C_siswa/tambahsiswa'); ?>" role="button">Tambah Siswa</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <!-- <th scope="col">Kelas</th> -->
                                    <th scope="col">Nama Ibu</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $student['nis'] ?></td>
                                    <td><?php echo $student['nama'] ?></td>
                                    <td><?php echo $student['nama_ibu'] ?></td>
                                    <td><?php echo $student['status'] ?></td>
                                    <td>
                                        <a class="btn btn-success " href="<?php echo base_url(); ?>C_siswa/viewsiswa/<?php echo $student['nis'] ?>">View</a>
                                        <a class="btn btn-info " href="<?php echo base_url(); ?>C_siswa/editsiswa/<?php echo $student['nis'] ?>">Edit</a>
                                        <a class="btn btn-danger " id="delete" href="<?php echo base_url(); ?>C_siswa/delete/<?php echo $student['user_id'] ?>">Delete</a>

                                        
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($user['level']==2) {  ?>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Siswa 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <!-- <th scope="col">Kelas</th> -->
                                    <th scope="col">Nama Ibu</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $student['nis'] ?></td>
                                    <td><?php echo $student['nama'] ?></td>
                                    <td><?php echo $student['nama_ibu'] ?></td>
                                    <td><?php echo $student['status'] ?></td>
                                    <td>
                                        <a class="btn btn-success " href="<?php echo base_url(); ?>C_siswa/viewsiswa/<?php echo $student['nis'] ?>">View</a>

                                        
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($user['level']==3) {  ?>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Siswa 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <!-- <th scope="col">Kelas</th> -->
                                    <th scope="col">Nama Ibu</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $student['nis'] ?></td>
                                    <td><?php echo $student['nama'] ?></td>
                                    <td><?php echo $student['nama_ibu'] ?></td>
                                    <td><?php echo $student['status'] ?></td>
                                    <td>
                                        <a class="btn btn-success " href="<?php echo base_url(); ?>C_siswa/viewsiswa/<?php echo $student['nis'] ?>">View</a>

                                        
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

       
    