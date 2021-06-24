

<div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="<?php echo base_url()?>uploads/guru/<?php echo $teachers['fotopath'] ?>" alt="" width="100%" height="100%">
    </div>
    <div class="col">
        <div class="col">
            <h3><?php echo $teachers['nama'] ?>  <span class="badge badge-dark"><?php echo $teachers['ahli'] ?></span>
            <button class="btn btn-xs btn-success float-right" role="button" id="btnPrint"><i data-feather="printer" ></i></button>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>NIP</td>
                            <td><?php echo $teachers['nip'] ?></td>
                            <td>Wali Kelas</td>
                            <td><?php echo $teachers['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $teachers['email'] ?></td>
                            <td>Jenis Kelamin</td>
                            <td><?php echo $teachers['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td><?php echo $teachers['pendidikan'] ?></td>
                            <td>Alamat</td>
                            <td><?php echo $teachers['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?php echo $teachers['no_tlp'] ?></td>
                            <td>Tahun Masuk</td>
                            <td><?php echo $teachers['created_at'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="<?php echo base_url('C_guru');?>" role="button">Kembali</a>

    </div>


    

    
    

    
</div>

