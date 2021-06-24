<div class="row">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
        <div class="col">
        
            <div class="card">
                <div class="card-header">
                    <strong>Daftar mapel yang tersedia Di kelas <?= $classesses['kelas'] ?> <?= $classesses['indexs'] ?></strong> 
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

                            <?php foreach ($mapel_class as $map):?>
                            <input type="hidden" name="id_mapel" value="<?= $map['id_mapel']?>">
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $map['id_mapel'] ?></td>
                                    <td><?php echo $map['nama_mapel'] ?></td>
                                    <td><?php echo $map['kkm'] ?></td>
                                    <td>
                                        <a class="btn btn-info rounded-pill" href="<?php echo base_url(); ?>C_transkip/tambah/<?php echo $map['nisn'] ?>/<?= $map['id_mapel'] ?>">Tambah Ke transkip</a>
                                        

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
    
    