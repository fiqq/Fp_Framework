
<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Edit Guru <?= $teachers['nama'] ?>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('C_guru/edit'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?php echo $teachers['nip']; ?>"/>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" value="<?= $teachers['nip'] ?>" readonly required>
                    </div>
                    <div class="form-group">
                        <?php if ($teachers['fotopath']!=null) {?>
                            <div class="col-md-2">
                                <img class="img-thumbnail" width="100%" height="100%" src="<?php echo base_url()?>uploads/guru/<?php echo $teachers['fotopath'] ?>" alt="">
                            </div>
                        <?php } ?>
                        <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap Guru" value="<?php echo $teachers['nama'] ?>" required>
                    </div>
                    <div class="form-group">
                        <select name="ahli" id="ahli" class="form-control" >
                            <option selected value="<?php echo $teachers['ahli'] ?>" ><?php echo $teachers['ahli'] ?></option>
                            <?php foreach($mapels as $mapel): ?>
                            <option value="<?= $mapel['nama_mapel'] ?>"><?= $mapel['nama_mapel'] ?></option>
                            <?php endforeach; ?>
                        </select>  
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $teachers['email'] ?>" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option selected value="<?php echo $teachers['jenis_kelamin'] ?>" ><?php echo $teachers['jenis_kelamin'] ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>   
                                </div>
                                <div class="col">
                                <select name="pendidikan" id="pendidikan" class="form-control" required>
                                    <option selected value="<?php echo $teachers['pendidikan'] ?>" ><?php echo $teachers['pendidikan'] ?></option>
                                    <option value="SMA">SMA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" rows="3" required><?php echo $teachers['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Telepon" value="<?php echo $teachers['no_tlp'] ?>" required>
                    </div>
                    <div class="form-group">
                    <select name="status" id="status" class="form-control" required>
                        <option value="<?php echo $teachers['status'] ?>" selected disabled><?php echo $teachers['status'] ?></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="<?php echo base_url('C_guru');?>" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
