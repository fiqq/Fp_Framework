
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h2>Data </h2>
</div>

      <div class="table-responsive">
            <table class="table-striped table table-bordered">
                        <tr>
                            <td>NIK</td>
                            <td><?php $masyarakat['nik'] ?></td>
                            <td>Nama</td>
                            <td><?php $masyarakat['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $teacher->email }}</td>
                            <td>Jenis Kelamin</td>
                            <td>{{ $teacher->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ $teacher->pendidikan }}</td>
                            <td>Alamat</td>
                            <td>{{ $teacher->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $teacher->no_tlp }}</td>
                            <td>Tahun Masuk</td>
                            <td>{{ $teacher->created_at->year }}</td>
                        </tr>
            </table>
      </div>