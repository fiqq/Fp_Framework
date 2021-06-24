<div class="row justify-content-center">
    <div class="col">
        <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('fail') ?>"></div> -->
        <div class="card">
            <div class="card-header">
                Tambah Mapel 
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('C_mapel/save'); ?>" method="POST" enctype="multipart/form-data">                    
                    <div class="form-group">
                        <input type="text" class="form-control" name="id_mapel" id="id_mapel" placeholder="id mapel"  required>
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" placeholder="nama mapel"   required>
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="kkm" id="kkm" placeholder="KKM" required>
                    </div>
                    <div class="form-group">
                        <select name="kelas" id="kelas" class="form-control" required>
                            <option selected disabled >Kelas Mapel</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>   
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

