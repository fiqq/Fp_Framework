<div class="row justifiy-content-center">
    <div class="col-md-2">
    <img class="img-thumbnail" width="100%" height="100%" src="<?php echo base_url()?>uploads/<?php echo $students['fotopath'] ?>" alt="">
    </div>
    <div class="col">
        <div class="col">
            <h3><?php echo $students['nama'] ?> <span class="badge badge-warning">Siswa</span> <span class="badge badge-dark"><?php echo $students['jenis_kelamin'] ?></span>
            <!-- <button class="btn btn-xs btn-success float-right" role="button" id="btnPrint"><i data-feather="printer" ></i> @lang('Print Profile')</button> -->
            <a href="{{route('viewprint', $student->nama)}}" target="_blank" role="button" class="btn btn-xs btn-success float-right"><i data-feather="printer" ></i> </a>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>NISN</td>
                            <td><?php echo $students['nisn'] ?></td>
                            <td>Tempat Lahir</td>
                            <td><?php echo $students['tempat_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td><?php echo $students['nis'] ?></td>
                            <td>Jenis Kelamin</td>
                            <td><?php echo $students['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td><?php echo $students['agama'] ?></td>
                            <td>Alamat</td>
                            <td><?php echo $students['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?php echo $students['no_tlp'] ?></td>
                            <td>Kelas</td>
                            <td><?php echo $students['kelas'] ?> <?php echo $students['indexs'] ?></td>
                        </tr>
                        <tr>
                            <td>Tahun Masuk</td>
                            <td><?php echo $students['created_at'] ?></td>
                            <td>Tanggal Lahir</td>
                            <td><?php echo $students['tanggal_lahir'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="<?php echo base_url('C_siswa');?>" role="button">Kembali</a>

    </div>


    

    
    

    
</div>

