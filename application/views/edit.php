
<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-header ">
                <h2>Edit <?php echo $masyarakat->nama; ?> </h2>
            </div>
            <div class="card-body">
                <!-- Form -->
                <div class="row justify-content-center">
                    <form action="<?php  echo base_url('C_home/editdata'); ?>" method="post">
                    <input type="hidden" name="nik" value="<?php echo $masyarakat->nik?>" />
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" value="<?php echo $masyarakat->nik ?>" name="nik" class="form-control" placeholder="Nik" aria-label="Nik">
                            </div>
                            <div class="col">
                                <input type="text" value="<?php echo $masyarakat->nama ?>" name="nama" class="form-control" placeholder="Nama" aria-label="Nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="number" value="<?php echo $masyarakat->no_hp ?>" name="no_hp" class="form-control" placeholder="No Hp" aria-label="No Hp">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <textarea class="form-control" name="alamat" id="alamat" cols="" rows=""><?php echo $masyarakat->alamat ?></textarea> 
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Jenis Vaksin</label>
                            <select name="jenis_vaksin" class="form-select form-control" id="inputGroupSelect01">
                                <option selected><?php echo $masyarakat->jenis_vaksin ?></option>
                                <option value="Sinovac">Sinovac</option>
                                <option value="Astra Zaneca">Astra Zaneca</option>
                                <option value="Moderna">Moderna</option>
                                <option value="Sinopharm">Sinopharm</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="datetime-local" value="<?php echo $masyarakat->jadwal1 ?>" name="jadwal1" class="form-control" placeholder="Jadwal Vaksinasi 1" aria-label="jadwal Vaksinasi 1">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="datetime-local" value="<?php echo $masyarakat->jadwal2 ?>" name="jadwal2" class="form-control" placeholder="Jadwal Vaksinasi 2" aria-label="jadwal Vaksinasi 2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" value="<?php echo $masyarakat->tempat ?>" name="tempat" class="form-control" placeholder="Tempat Vaksinasi" aria-label="Tempat Vaksinasi">
                            </div>
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- End Form -->


            </div>
        </div>