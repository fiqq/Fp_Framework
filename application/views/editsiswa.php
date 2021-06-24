<div class="row justify-content-center">
    <div class="col">
        <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('fail') ?>"></div> -->
        <div class="card">
            <div class="card-header">
                Edit Siswa <?= $students['nama'] ?>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('C_siswa/edit'); ?>" method="POST" enctype="multipart/form-data">                    
                    <input type="hidden" name="id" id="id" value="<?php echo $students['nis']; ?>"/>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nisn" id="nisn" placeholder="NISN" value="<?= $students['nisn'] ?>" readonly required>
                        <?= form_error('nisn','<small class="text-danger pl-3">,</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" value="<?= $students['nis'] ?>" readonly required>
                        <?= form_error('nis','<small class="text-danger pl-3">,</small>'); ?>
                    </div>
                    <div class="form-group">
                        <?php if ($students['fotopath']!=null) {?>
                            <div class="col-md-2">
                                <img class="img-thumbnail" width="100%" height="100%" src="<?php echo base_url()?>uploads/<?php echo $students['fotopath'] ?>" alt="">
                            </div>
                        <?php } ?>
                        <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?= $students['nama'] ?>" required>
                        <?= form_error('nama','<small class="text-danger pl-3">,</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select required name="classess_id_kelas" id="classess_id_kelas" class="form-control"  >
                            <option value="<?= $classess_students['id_kelas'] ?>" selected ><?= $classess_students['kelas'] ?> <?= $classess_students['indexs'] ?></option>
                            <?php foreach($classesses as  $teach): ?>
                            <option value="<?= $teach['id_kelas'] ?>"><?= $teach['kelas'] ?> <?= $teach['indexs'] ?></option>
                            <?php endforeach; ?>
                        </select>   
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $students['tempat_lahir'] ?>" required>
                    </div>
                    <div class="form-group">
                            <input type="date" class="form-control datepicker-here" data-language='en' name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $students['tanggal_lahir'] ?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option value="<?= $students['jenis_kelamin'] ?>" selected ><?= $students['jenis_kelamin'] ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>   
                                </div>
                                <div class="col">
                                <select name="agama" id="agama" class="form-control" required>
                                    <option value="<?= $students['agama'] ?>" selected ><?= $students['agama'] ?></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" rows="3"  required><?= $students['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu Kandung" value="<?= $students['nama_ibu'] ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Telepon" value="<?= $students['no_tlp'] ?>" required>
                    </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control" required>
                            <option value="<?= $students['status'] ?>" selected ><?= $students['status'] ?></option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>   
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="<?php echo base_url('C_siswa');?>" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

