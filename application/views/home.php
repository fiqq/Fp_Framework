<!-- Dashboard Admin -->
<?php if ($user['level']==1) {  ?>

<div class="row mt-4">
  <div class="col">
    <div class="card">
      <div class="card-header">
        Panduan Awal 
      </div>
      <div class="card-body">
        <h5 class="card-title">Mohon Dibaca</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">1. Dashboard, adalah menu untuk menampilkan kegiatan, berita , dl</li>
          <li class="list-group-item">2. Agenda adalah menu untuk mengelola Kegiatan yang ditawarkan.</li>
          <li class="list-group-item">3. Data Mahasiswa adalah menu untuk menampilkan data mahasiswa pada Fakultas terkait termasuk data KRK dan data KHK dari mahasiswa terpilih.</li>
          <li class="list-group-item">4. Validasi KRK adalah menu bagi Admin untuk memvalidasi KRK yang diajukan oleh mahasiswa pada periode berjalan</li>
          <li class="list-group-item">5. Validasi KHK adalah menu bagi Admin untuk memvalidasi KHK mahasiswa atas sertifikat yang telah diupload oleh mahasiswa.</li>
          <li class="list-group-item">6. Daftar Prestasi adalah menu untuk menampilkan total kumpulan poin dari mahasiswa dengan filter Prodi dalam urutan mulai yang terbanyak</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php }?>
<!-- End Dashboard Admin -->


<!-- Dashboard Guru -->
<?php if ($user['level']==2) {  ?>
  <div class="row mt-4">
  <div class="col">
    <div class="card">
      <div class="card-header">
        Panduan Awal 
      </div>
      <div class="card-body">
        <h5 class="card-title">Mohon Dibaca</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">1. Dashboard, adalah menu untuk menampilkan kegiatan, berita , dl</li>
          <li class="list-group-item">2. Agenda adalah menu untuk mengelola Kegiatan yang ditawarkan.</li>
          <li class="list-group-item">3. Data Mahasiswa adalah menu untuk menampilkan data mahasiswa pada Fakultas terkait termasuk data KRK dan data KHK dari mahasiswa terpilih.</li>
          <li class="list-group-item">4. Validasi KRK adalah menu bagi Admin untuk memvalidasi KRK yang diajukan oleh mahasiswa pada periode berjalan</li>
          <li class="list-group-item">5. Validasi KHK adalah menu bagi Admin untuk memvalidasi KHK mahasiswa atas sertifikat yang telah diupload oleh mahasiswa.</li>
          <li class="list-group-item">6. Daftar Prestasi adalah menu untuk menampilkan total kumpulan poin dari mahasiswa dengan filter Prodi dalam urutan mulai yang terbanyak</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php }?>
<!-- End Dashboard Guru -->

<!-- Dashboard Siswa -->
<?php if ($user['level']==3) {  ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h2>Data Siswa</h2>
</div>

          <div class="row mt-4">
          <div class="ml-3">
            <img width="80%" height="80%"  src="<?php echo base_url()?>uploads/<?php echo $students['fotopath'] ?>" alt="">
            <div class="mt-3 ml-4">
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