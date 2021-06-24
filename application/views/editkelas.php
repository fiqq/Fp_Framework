
<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Edit Kelas <?= $classesses['kelas'] ?> <?= $classesses['indexs'] ?>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('C_kelas/edit'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?php echo $classesses['id_kelas']; ?>"/>
                    <div class="form-group">
                        <label for="nama_kelas" class="form-label"><strong>Nama Kelas</strong> </label>
                        <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" value="<?= $classesses['nama_kelas'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_siswa" class="form-label"><strong>Jumlah Siswa</strong>  </label>
                        <input type="text" class="form-control" name="jumlah_siswa" id="jumlah_siswa" placeholder="jumlah_siswa" value="<?= $count_students ?>" readonly required>
                    </div>

                    <div class="form-group">
                        <label for="wali_kelas" class="form-label"><strong>Wali Kelas</strong></label>
                        <select name="wali_kelas" id="wali_kelas" class="form-control" required>
                            <?php if ($count_teachers<1 ) { ?>
                                <option selected  disabled>Pilih Wali Kelas</option>
                                <?php foreach($teachers_null as $teach): ?>
                                    <option value="<?= $teach['nip'] ?>"><?= $teach['nama'] ?></option>
                                <?php endforeach; ?>
                             <?php }else{ ?>
                                <option selected value="<?php echo $teachers['classess_id_kelas'] ?>" disabled><?php echo $teachers['nama'] ?></option>
                                <?php foreach($teachers_null as $teach): ?>
                                    <option value="<?= $teach['nip'] ?>"><?= $teach['nama'] ?></option>
                                <?php endforeach; ?>
                             <?php } ?>
                            
                        </select>   
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="<?php echo base_url('C_kelas');?>" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
