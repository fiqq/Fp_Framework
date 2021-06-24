<div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
        
            <div class="card">
                <div class="card-header">
                Data Transkip Siswa <strong> <?= $students['nama'] ?> </strong>  NISN  <strong> <?= $students['nisn'] ?> </strong>
                <a class="float-right btn btn-success" href="<?php echo base_url(); ?>C_transkip/tambahnilai/<?= $students['classess_id_kelas'] ?>" role="button">Tambah Data</a>   
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
            <a class="mt-2 btn btn-secondary" href="<?php echo base_url('C_transkip');?>" role="button">Kembali</a>
        </div>
    </div>
    
    