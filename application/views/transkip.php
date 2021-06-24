<?php if ($user['level']==1) {  ?>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Transkip Nilai Siswa   
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
                                        <a class="btn btn-success " href="<?php echo base_url(); ?>C_transkip/viewtranskip/<?php echo $student['nis'] ?>">View</a>
                                        <a class="btn btn-info " href="<?php echo base_url(); ?>C_transkip/edittranskip/<?php echo $student['nis'] ?>">Edit</a>

                                        
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
                    Data Transkip Nilai Siswa   
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
                                        <a class="btn btn-success " href="<?php echo base_url(); ?>C_transkip/viewtranskip/<?php echo $student['nis'] ?>">View</a>
                                        <a class="btn btn-info " href="<?php echo base_url(); ?>C_transkip/edittranskip/<?php echo $student['nis'] ?>">Edit</a>

                                        
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
                Data Transkip Siswa <strong> <?= $students_where['nama'] ?> </strong>  NISN  <strong> <?= $students_where['nisn'] ?> </strong>
               
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead >
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id mapel</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">Nilai Tugas</th>
                                    <th scope="col">Nilai UTS</th>
                                    <th scope="col">Nilai UAS</th>
                                    <th scope="col">KKM</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($scores as $score):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $score['mapel_id_mapel'] ?></td>
                                    <td><?php echo $score['nama_mapel'] ?></td>
                                    <td><?php echo $score['nilai_tugas'] ?></td>
                                    <td><?php echo $score['nilai_uts'] ?></td>
                                    <td><?php echo $score['nilai_uas'] ?></td>
                                    <td><?php echo $score['kkm'] ?></td>
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
    