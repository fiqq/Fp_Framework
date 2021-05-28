<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

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
    <link href="<?php echo base_url('assets/css/dashboard.css')?>" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo base_url(); ?>C_home">SIAMIK FRAMEWORK</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
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
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">

            <!-- Admin Sidebar -->
            <?php if ($user['level']==1) {  ?>
              <li style="margin-left: 25%; margin-bottom: 20px;">
                <img width="100px" height="100px" src="<?php echo base_url('assets/images/logo.png')?>" alt="">
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url() ?>">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url('C_home/datasiswa') ?>">
                  <span data-feather="home"></span>
                  Data Siswa <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url() ?>">
                  <span data-feather="home"></span>
                  Data Guru <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Transkip Nilai
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Jadwal Mapel
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Ujian
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Tugas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Absensi Harian
                </a>
              </li>
            <?php }?>
            <!-- End Admin Sidebar -->

            <!-- Guru Sidebar -->


            <!-- End Guru Sidebar  -->


            <!-- Siswa Sidebar -->
            <?php if ($user['level']==3) {  ?>
              <li style="margin-left: 25%; margin-bottom: 20px;">
                <img width="100px" height="100px" src="<?php echo base_url('assets/images/logo.png')?>" alt="">
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url() ?>">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Transkip Nilai
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Jadwal Mapel
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Ujian
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Tugas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Absensi Harian
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
               
                <?php if ($user['level']== 3) { echo $students['nama']; }  ?>
                <?php if ($user['level']== 1) { echo $user['nama']; }  ?>
              </a>
            </button>
        </div>
      </div>

      
        <?php echo $contents ?>

    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="./assets/js/dashboard.js"></script></body>
</html>
