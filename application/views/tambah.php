
<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-header ">
                <h2>Tambah</h2>
            </div>
            <div class="card-body">
                <!-- Form -->
                <div class="row justify-content-center">
                    <form action="<?php  echo base_url('C_home/adddata'); ?>" method="post">
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="nik" class="form-control" placeholder="Nik" aria-label="Nik">
                            </div>
                            <div class="col">
                                <input type="text"  name="nama" class="form-control" placeholder="Nama" aria-label="Nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="number"  name="no_hp" class="form-control" placeholder="No Hp" aria-label="No Hp">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <textarea class="form-control" name="alamat" id="alamat" cols="" rows=""></textarea> 
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Jenis Vaksin</label>
                            <select name="jenis_vaksin"  class="form-select form-control" id="inputGroupSelect01">
                                <option selected>...</option>
                                <option value="Sinovac">Sinovac</option>
                                <option value="Astra Zaneca">Astra Zaneca</option>
                                <option value="Moderna">Moderna</option>
                                <option value="Sinopharm">Sinopharm</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="datetime-local"  name="jadwal1" class="form-control" placeholder="Jadwal Vaksinasi 1" aria-label="jadwal Vaksinasi 1">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="datetime-local"  name="jadwal2" class="form-control" placeholder="Jadwal Vaksinasi 2" aria-label="jadwal Vaksinasi 2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text"  name="tempat" class="form-control" placeholder="Tempat Vaksinasi" aria-label="Tempat Vaksinasi">
                            </div>
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- End Form -->


            </div>
        </div>