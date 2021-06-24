<?php if ($user['level']==1) {  ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Guru 
                    <a class="float-right btn btn-success" href="<?php echo base_url('C_guru/getguru'); ?>" role="button">Tambah Guru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Ahli</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($teachers as $teacher):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?= $teacher['nip'] ?></td>
                                    <td><?= $teacher['nama'] ?></td>
                                    <td><?= $teacher['ahli'] ?></td>
                                    <!-- <td>{{ $teach->classess->nama_kelas ?? ''}}</td> -->
                                    <td><?= $teacher['status'] ?></td>
                                    <td>
                                        <a class="btn btn-success " href="<?php echo base_url(); ?>C_guru/viewguru/<?php echo $teacher['nip'] ?>">View</a>
                                        <a class="btn btn-info " href="<?php echo base_url(); ?>C_guru/editguru/<?php echo $teacher['nip'] ?>">Edit</a>
                                        <a class="btn btn-danger " id="deleteguru" href="<?php echo base_url(); ?>C_guru/hapus/<?php echo $teacher['user_id'] ?>">Delete</a>
                                        
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
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Guru 
                    
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Ahli</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($teachers as $teacher):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?= $teacher['nip'] ?></td>
                                    <td><?= $teacher['nama'] ?></td>
                                    <td><?= $teacher['ahli'] ?></td>
                                    <!-- <td>{{ $teach->classess->nama_kelas ?? ''}}</td> -->
                                    <td><?= $teacher['status'] ?></td>
                                    <td>
                                        <a class="btn btn-success " href="<?php echo base_url(); ?>C_guru/viewguru/<?php echo $teacher['nip'] ?>">View</a>
                                        
                                        
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
    
   