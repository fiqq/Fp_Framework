<?php if ($user['level']==1) {  ?>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
        
            <div class="card">
                <div class="card-header">
                    <strong>Daftar mapel yang tersedia </strong> 
                    <a class="float-right btn btn-success rounded-pill" href="<?php echo base_url(); ?>C_mapel/tambahmapel" role="button">Tambah Mapel</a>
                </div>
          
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead >
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id mapel</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">KKM</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mapel as $map):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $map['id_mapel'] ?></td>
                                    <td><?php echo $map['nama_mapel'] ?></td>
                                    <td><?php echo $map['kkm'] ?></td>
                                    <td>
                                        <a class="btn btn-info rounded-pill" href="<?php echo base_url(); ?>C_mapel/editmapel/<?php echo $map['id_mapel'] ?>">Edit</a>
                                        

                                    </td>
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
    
    
<?php } ?>

<?php if ($user['level']==2) {  ?>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
        
            <div class="card">
                <div class="card-header">
                    <strong>Daftar mapel yang tersedia </strong> 
                    
                </div>
          
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead >
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id mapel</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">KKM</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mapel as $map):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $map['id_mapel'] ?></td>
                                    <td><?php echo $map['nama_mapel'] ?></td>
                                    <td><?php echo $map['kkm'] ?></td>
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
                    <strong>Daftar mapel yang tersedia </strong> 
                    
                </div>
          
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead >
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id mapel</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">KKM</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mapel as $map):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $map['id_mapel'] ?></td>
                                    <td><?php echo $map['nama_mapel'] ?></td>
                                    <td><?php echo $map['kkm'] ?></td>
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

