
<?php if ($user['level']==1) {  ?>
    <div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="<?php echo base_url('assets/images/logo.png')?>" alt="" width="100%" height="100%">
    </div>
    <div class="col">
        <div class="col">
            <h3>Kelas <span class="badge badge-dark">
            <?php 
            if ($this->uri->segment(3)== 10) {
                echo '10';
                $id = 10;
            }elseif ($this->uri->segment(3)== 11) {
                echo '11';
                $id = 11;
            }elseif ($this->uri->segment(3)== 12) {
                echo '12';
                $id = 12;
            }
            ?>
            </span>
            <a class="float-right btn btn-success" href="<?php echo base_url(); ?>C_kelas/tambahkelas/<?php echo $id ?>" role="button">Tambah Kelas</a>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>Nomor</td>
                            <td>Kelas</td>
                            <td>Aksi</td>
                        </tr>
                        <?php $b=1; foreach ($classesses as $kelas):?>
                        <tr>
                            <td><?php echo $b ?></td>
                            <td><?php echo $kelas['kelas'] ?> <?= $kelas['indexs'] ?></td>
                            <td>
                            <a class="btn btn-secondary" href="<?php echo base_url(); ?>C_kelas/view/<?php echo $kelas['id_kelas'] ?>" role="button">View</a>
                            <a class="btn btn-warning" href="<?php echo base_url(); ?>C_kelas/editkelas/<?php echo $kelas['id_kelas'] ?>" role="button">Edit</a>
                            </td>

                        </tr>
                        <?php $b++; endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="<?php echo base_url('C_kelas');?>" role="button">Kembali</a>

    </div>


    

    
    

    
</div>


<?php } ?>

<?php if ($user['level']==2) {  ?>
    <div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="<?php echo base_url('assets/images/logo.png')?>" alt="" width="100%" height="100%">
    </div>
    <div class="col">
        <div class="col">
            <h3>Kelas <span class="badge badge-dark">
            <?php 
            if ($this->uri->segment(3)== 10) {
                echo '10';
                $id = 10;
            }elseif ($this->uri->segment(3)== 11) {
                echo '11';
                $id = 11;
            }elseif ($this->uri->segment(3)== 12) {
                echo '12';
                $id = 12;
            }
            ?>
            </span>
            
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>Nomor</td>
                            <td>Kelas</td>
                            <td>Aksi</td>
                        </tr>
                        <?php $b=1; foreach ($classesses as $kelas):?>
                        <tr>
                            <td><?php echo $b ?></td>
                            <td><?php echo $kelas['kelas'] ?> <?= $kelas['indexs'] ?></td>
                            <td>
                            <a class="btn btn-secondary" href="<?php echo base_url(); ?>C_kelas/view/<?php echo $kelas['id_kelas'] ?>" role="button">View</a>
                            
                            </td>

                        </tr>
                        <?php $b++; endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="<?php echo base_url('C_kelas');?>" role="button">Kembali</a>

    </div>


    

    
    

    
</div>


<?php } ?>

<?php if ($user['level']==3) {  ?>
    <div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="<?php echo base_url('assets/images/logo.png')?>" alt="" width="100%" height="100%">
    </div>
    <div class="col">
        <div class="col">
            <h3>Kelas <span class="badge badge-dark">
            <?php 
            if ($this->uri->segment(3)== 10) {
                echo '10';
                $id = 10;
            }elseif ($this->uri->segment(3)== 11) {
                echo '11';
                $id = 11;
            }elseif ($this->uri->segment(3)== 12) {
                echo '12';
                $id = 12;
            }
            ?>
            </span>
            
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>Nomor</td>
                            <td>Kelas</td>
                            <td>Aksi</td>
                        </tr>
                        <?php $b=1; foreach ($classesses as $kelas):?>
                        <tr>
                            <td><?php echo $b ?></td>
                            <td><?php echo $kelas['kelas'] ?> <?= $kelas['indexs'] ?></td>
                            <td>
                            <a class="btn btn-secondary" href="<?php echo base_url(); ?>C_kelas/view/<?php echo $kelas['id_kelas'] ?>" role="button">View</a>
                            
                            </td>

                        </tr>
                        <?php $b++; endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="<?php echo base_url('C_kelas');?>" role="button">Kembali</a>

    </div>


    

    
    

    
</div>


<?php } ?>
