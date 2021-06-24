<div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
        
            <div class="card">
                <div class="card-header">
                    <strong>Data Kelas <?= $classesses['kelas'] ?> <?= $classesses['indexs'] ?> ID <?= $classesses['id_kelas'] ?></strong> 
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead >
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Nama Wali</th>
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
                                    <td><?php echo $student['classess_id_kelas'] ?></td>
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
            <a class="mt-2 btn btn-secondary" href="<?php echo base_url('C_kelas');?>" role="button">Kembali</a>
        </div>
    </div>
       
    