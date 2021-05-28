<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Siswa   
                    <a class="float-right btn btn-success" href="#" role="button">Tambah Siswa</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Nama Wali</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $student['nis'] ?></td>
                                    <td><?php echo $student['nama'] ?></td>
                                    <td><?php echo $student['classess_id_kelas'] ?></td>
                                    <td><?php echo $student['nama_ibu'] ?></td>
                                    <td><?php echo $student['status'] ?></td>
                                    <td>
                                        <a class="btn btn-success " href="/siswa/view/{{$studen->nama}}">View</a>
                                        <a class="btn btn-info " href="/siswa/edit/{{$studen->nama}}">Edit</a>
                                        <form class="d-inline" action="/siswa/delete/{{$studen->nama}}" method="post" onsubmit="return confirm('Yakin Ingin Menghapus Data Ini ?')">
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>