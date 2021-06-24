<?php if ($user['level']==1) {  ?>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
        
            <div class="card">
                <div class="card-header">
                Data Transkip Siswa <strong> <?= $students['nama'] ?> </strong>  NISN  <strong> <?= $students['nisn'] ?> </strong>
                    
                </div>
                <div class="card-body">
                <form action="<?php echo base_url('C_transkip/edit'); ?>" method="POST" enctype="multipart/form-data">                    
                   
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
                            <?php $i=0;$ite=1; ?>
                            <?php foreach ($scores as $score):?>
                                <input type="hidden" name="id_<?=$i?>" value="<?= $score['id_score'] ?>">
                                <tr>
                                    <th scope="row"><?=$ite ?></th>
                                    <td><?php echo $score['mapel_id_mapel'] ?></td>
                                    <td><?php echo $score['nama_mapel'] ?></td>
                                    <td><input class="form-control" type="number" name="nilai_tugas_<?=$i?>" id="nilai_tugas" value="<?php echo ($score['nilai_tugas']!='') ? $score['nilai_tugas'] : 0 ?>"></td>
                                    <td><input class="form-control" type="number" name="nilai_uts_<?=$i?>" id="nilai_uts" value="<?php echo ($score['nilai_uts']!='') ? $score['nilai_uts'] : 0 ?>"></td>
                                    <td><input class="form-control" type="number" name="nilai_uas_<?=$i?>" id="nilai_uas" value="<?php echo ($score['nilai_uas']!='') ? $score['nilai_uas'] : 0 ?>"></td>
                                    <td><?php echo $score['kkm'] ?></td>
                                </tr>
                            <?php $ite++;$i++; endforeach; ?>
                            <input type='hidden' value='<?= $i ?>' name="total">
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
            
            <a class="mt-2 btn btn-secondary" href="<?php echo base_url('C_transkip');?>" role="button">Kembali</a>
        </div>
    </div>
    
    
<?php } ?>

<?php if ($user['level']==2) {  ?>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
        
            <div class="card">
                <div class="card-header">
                Data Transkip Siswa <strong> <?= $students['nama'] ?> </strong>  NISN  <strong> <?= $students['nisn'] ?> </strong>
                    
                </div>
                <div class="card-body">
                <form action="<?php echo base_url('C_transkip/edit'); ?>" method="POST" enctype="multipart/form-data">                    
                   
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
                            <?php $i=0;$ite=1; ?>
                            <?php foreach ($teachers_scores as $score):?>
                                <input type="hidden" name="id_<?=$i?>" value="<?= $score['id_score'] ?>">
                                <tr>
                                   <th scope="row"><?=$ite ?></th>
                                    <td><?php echo $score['mapel_id_mapel'] ?></td>
                                    <td><?php echo $score['nama_mapel'] ?></td>
                                    <td><input class="form-control" type="number" name="nilai_tugas_<?=$i?>" id="nilai_tugas" value="<?php echo ($score['nilai_tugas']!='') ? $score['nilai_tugas'] : 0 ?>"></td>
                                    <td><input class="form-control" type="number" name="nilai_uts_<?=$i?>" id="nilai_uts" value="<?php echo ($score['nilai_uts']!='') ? $score['nilai_uts'] : 0 ?>"></td>
                                    <td><input class="form-control" type="number" name="nilai_uas_<?=$i?>" id="nilai_uas" value="<?php echo ($score['nilai_uas']!='') ? $score['nilai_uas'] : 0 ?>"></td>
                                    <td><?php echo $score['kkm'] ?></td>
                                </tr>
                            <?php $ite++;$i++; endforeach; ?>
                            <input type='hidden' value='<?=$i ?>' name="total">
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
            
            <a class="mt-2 btn btn-secondary" href="<?php echo base_url('C_transkip');?>" role="button">Kembali</a>
        </div>
    </div>
    
    
<?php } ?>

