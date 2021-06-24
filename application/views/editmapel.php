<div class="row justify-content-center">
    <div class="col">
        <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('fail') ?>"></div> -->
        <div class="card">
            <div class="card-header">
                Edit Mapel <?= $mapels['nama_mapel'] ?>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('C_mapel/edit'); ?>" method="POST" enctype="multipart/form-data">                    
                    <input type="hidden" name="id" id="id" value="<?php echo $mapels['id_mapel']; ?>"/>
                    <div class="form-group">
                        <input type="text" class="form-control" name="id_mapel" id="id_mapel" placeholder="id mapel" value="<?= $mapels['id_mapel'] ?>" readonly required>
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" placeholder="nama mapel" value="<?= $mapels['nama_mapel'] ?>"  required>
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="kkm" id="kkm" placeholder="KKM" value="<?= $mapels['kkm'] ?>" required>
                        
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="<?php echo base_url('C_mapel');?>" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

