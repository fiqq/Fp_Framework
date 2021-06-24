<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/"> -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/dashboard.css')?>" rel="stylesheet">

    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
    <!-- Bootstrap core CSS -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo base_url(); ?>C_home">SIAMIK FRAMEWORK</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenus" aria-controls="sidebarMenus" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?php echo base_url(); ?>C_login/logout">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenus" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">

            <!-- Admin Sidebar -->
            <?php if ($user['level']==1) {  ?>
              <li style="margin-left: 25%; margin-bottom: 20px;">
                <img width="100px" height="100px" src="<?php echo base_url('assets/images/logo.png')?>" alt="">
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_home"){echo "active";}?>" href="<?php echo base_url('C_home') ?>">
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_siswa"){echo "active";}?>" href="<?php echo base_url('C_home/datasiswa') ?>">
                  Data Siswa <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_guru"){echo "active";}?>" href="<?php echo base_url('C_guru') ?>">
                  Data Guru <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_kelas"){echo "active";}?>" href="<?php echo base_url('C_kelas') ?>">
                  Data Kelas <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_transkip"){echo "active";}?>" href="<?php echo base_url('C_transkip') ?>">
                  Transkip Nilai
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_mapel"){echo "active";}?>" href="<?php echo base_url('C_mapel') ?>">
                   Mapel
                </a>
              </li>
            <?php }?>
            <!-- End Admin Sidebar -->

            <!-- Guru Sidebar -->
            <?php if ($user['level']==2) {  ?>
              <li style="margin-left: 25%; margin-bottom: 20px;">
                <img width="100px" height="100px" src="<?php echo base_url('assets/images/logo.png')?>" alt="">
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_home"){echo "active";}?>" href="<?php echo base_url('C_home') ?>">
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_siswa"){echo "active";}?>" href="<?php echo base_url('C_home/datasiswa') ?>">
                  Data Siswa <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_guru"){echo "active";}?>" href="<?php echo base_url('C_guru') ?>">
                  Data Guru <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_kelas"){echo "active";}?>" href="<?php echo base_url('C_kelas') ?>">
                  Data Kelas <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_transkip"){echo "active";}?>" href="<?php echo base_url('C_transkip') ?>">
                  Transkip Nilai
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_mapel"){echo "active";}?>" href="<?php echo base_url('C_mapel') ?>">
                   Mapel
                </a>
              </li>
            <?php }?>

            <!-- End Guru Sidebar  -->


            <!-- Siswa Sidebar -->
            <?php if ($user['level']==3) {  ?>
              <li style="margin-left: 25%; margin-bottom: 20px;">
                <img width="100px" height="100px" src="<?php echo base_url('assets/images/logo.png')?>" alt="">
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(1)=="C_home"){echo "active";}?>" href="<?php echo base_url('C_home') ?>">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_transkip"){echo "active";}?>" href="<?php echo base_url('C_transkip') ?>">
                  <span data-feather="home"></span>
                  Transkip Nilai
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_mapel"){echo "active";}?>" href="<?php echo base_url('C_mapel') ?>">
                  <span data-feather="home"></span>
                  Mapel
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_siswa"){echo "active";}?>" href="<?php echo base_url('C_siswa') ?>">
                  <span data-feather="home"></span>
                  Data Siswa
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=="C_kelas"){echo "active";}?>" href="<?php echo base_url('C_kelas') ?>">
                  Data Kelas <span class="sr-only">(current)</span>
                </a>
              </li>
            <?php }?>
            <!-- End Siswa Sidebar -->
        </ul>

      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" disabled>Class</button>
            
            <?php 
              if ($user['level']== 3) {
                echo '<button type="button" class="btn btn-sm btn-warning">Siswa</button>';
              }elseif ($user['level']==2) {
                echo '<button type="button" class="btn btn-sm btn-primary">Guru</button>';
              }elseif ($user['level']==1) {
                echo '<button type="button" class="btn btn-sm btn-danger">Admin</button>';
              }
              
              else {
                echo '<button type="button" class="btn btn-sm btn-outline-secondary">Unknown</button>';
              }
            ?>
            
          </div>
            <button type="button"  class="btn btn-sm btn-outline-secondary ">
              <a href="#">
                <span data-feather="calendar"></span>
               
                <?php if ($user['level']== 3) { echo $user['nama']; }  ?>
                <?php if ($user['level']== 1) { echo $user['nama']; }  ?>
                <?php if ($user['level']== 2) { echo $user['nama']; }  ?>
              </a>
            </button>
        </div>
      </div>

      
        <?php echo $contents ?>

    </main>
  </div>
</div>
<script>
        $(document).on('click','#deleteguru', function(event){
            event.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "Data Ini akan Dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location = href;
                }
            })
        });
    </script>
    <script>
        $(document).on('click','#delete', function(event){
            event.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "Data Ini akan Dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location = href;
                }
            })
        });
    </script>
</html>
