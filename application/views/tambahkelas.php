
<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah Kelas
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('C_kelas/save'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="number" class="form-control" name="id_kelas" id="id_kelas" placeholder="id kelas" max="<?= $classesses ?>99" min="<?= $classesses ?>00" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="kelas" id="kelas" placeholder="kelas" value="<?= $classesses ?>"  readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="index" id="index" placeholder="Index kelas" maxlength="1" pattern="[A-Za-z]" title="Input Hanya Menerima Huruf" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama kelas"  required>
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
