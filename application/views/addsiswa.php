<div class="row justify-content-center">
    <div class="col">
        <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('fail') ?>"></div> -->
        <div class="card">
            <div class="card-header">
                Tambah Siswa
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('C_siswa/savesiswa'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nisn" id="nisn" placeholder="NISN" required>
                        <?= form_error('nisn','<small class="text-danger pl-3">,</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" required>
                        <?= form_error('nis','<small class="text-danger pl-3">,</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                        <?= form_error('nama','<small class="text-danger pl-3">,</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="classess_id_kelas" id="classess_id_kelas" class="form-control" required>
                            <option selected disabled>Kelas</option>
                            <?php foreach($classesses as $teach): ?>
                            <option value="<?= $teach['id_kelas'] ?>"><?= $teach['kelas'] ?> <?= $teach['indexs'] ?></option>
                            <?php endforeach; ?>
                        </select>   
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="form-group">
                            <input type="date" class="form-control datepicker-here" data-language='en' name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option selected disabled>Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>   
                                </div>
                                <div class="col">
                                <select name="agama" id="agama" class="form-control" required>
                                    <option selected disabled>Agama</option>
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
                        <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu Kandung" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Telepon" required>
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

