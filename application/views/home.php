<!-- Dashboard Admin -->
<?php if ($user['level']==1) {  ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h2>Data Admin</h2>
  </div>

  <div class="row mt-4">
    <div class="ml-3">
      <img width="100px" height="100px" src="<?php echo base_url('assets/images/logo.png')?>" alt="">
      <div class="mt-3">
        <strong>
          <?php echo $user['nama']; ?>  
        </strong>
      </div>
    </div>
      <div class="col">
          <div class="col">
              <table class="table-striped table table-bordered">
                  <tr>
                      <td>Nama</td>
                      <td><?php echo $user['nama']; ?></td>
                      <td>Email</td>
                      <td><?php echo $user['email']; ?></td>
                  </tr>
                  <tr>
                      <td>Status</td>
                      <td>Aktif</td>
                      <td>Jabatan</td>
                      <td>Admin 1</td>
                  </tr>
                  
              </table>
          </div>
      `</div>
  </div>

<?php }?>
<!-- End Dashboard Admin -->


<!-- Dashboard Guru -->
<?php if ($user['level']==2) {  ?>


<?php }?>
<!-- End Dashboard Guru -->

<!-- Dashboard Siswa -->
<?php if ($user['level']==3) {  ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h2>Data Siswa</h2>
</div>

          <div class="row mt-4">
          <div class="ml-3">
            <img width="100px" height="100px" src="<?php echo base_url('assets/images/logo.png')?>" alt="">
            <div class="mt-3">
              <strong>
                <?php echo $students['nama']; ?>  
              </strong>
            </div>
          </div>
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>NISN</td>
                            <td><?php echo $students['nisn']; ?></td>
                            <td>Tempat Lahir</td>
                            <td><?php echo $students['tempat_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td><?php echo $students['nis']; ?></td>
                            <td>Jenis Kelamin</td>
                            <td><?php echo $students['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td><?php echo $students['agama']; ?></td>
                            <td>Alamat</td>
                            <td><?php echo $students['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?php echo $students['no_tlp']; ?></td>
                            <td>Kelas</td>
                            <td><?php echo $students['classess_id_kelas']; ?></td>
                        </tr>
                        <tr>
                            <td>Tahun Masuk</td>
                            <td><?php echo $students['created_at']; ?></td>
                            <td>Tanggal Lahir</td>
                            <td><?php echo $students['tanggal_lahir']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php }?>

        <!-- End Dashboard Siswa -->