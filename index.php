<?php
session_start();
include'koneksi.php';
$tgl=date('Y-m-d');
if(isset($_SESSION['nama_user'])){
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Aplikasi Penerimaan Siswa Baru</title>

    <!-- Bootstrap CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">PSBapp</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link user-name">
              <span class="rounded-circle text-light bg-dark" data-feather="user"></span> <?= $_SESSION['nama_user'] ?>
              <span class="rounded-circle bg-success text-success" data-feather="divide-circle"></span>
            </a>
            <hr>
          </li>
          <?php 
            if($_SESSION['hak_akses']=='admin'){ 
              $link = 'p=dashboard-admin'; 
            }else if($_SESSION['hak_akses']=='siswa'){ 
              $link = 'p=dashboard-siswa'; 
            } 
          ?>
          <li class="nav-item">
            <a class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], "$link")) { print('active'); } ?>" href="index.php?<?=$link ?> ">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <?php 
            if($_SESSION['hak_akses']=='admin'){
              $display = 'd-block';
            }else{
              $display = 'd-none';
            } ?>
          <li class="nav-item">
            <a class="nav-link <?= "$display" ?> <?php if(str_contains($_SERVER['QUERY_STRING'], 'p=informasi-pendaftaran')) { print('active'); } ?>" href="index.php?p=informasi-pendaftaran">
              <span data-feather="info"></span>
              Informasi Pendaftaran
            </a>
          </li>
          <?php 
            if($_SESSION['hak_akses']=='siswa'){
              $show = 'd-block';
            }else{
              $show = 'd-none';
            } ?>
          <li class="nav-item">
            <a class="nav-link <?= "$show" ?> <?php if(str_contains($_SERVER['QUERY_STRING'], 'p=form-pendaftaran')) { print('active'); } ?>" href="index.php?p=form-pendaftaran">
              <span data-feather="file-text"></span>
              Form Pendaftaran
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-none <?php if(str_contains($_SERVER['QUERY_STRING'], 'p=data-siswa-table')) { print('active'); } ?>" href="index.php?p=data-siswa-table">
              <span data-feather="file-text"></span>
              Data Calon Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-none <?php if(str_contains($_SERVER['QUERY_STRING'], 'p=user-table')) { print('active'); } ?>" href="index.php?p=user-table">
              <span data-feather="folder"></span>
              Master Data
            </a>
          </li>
          
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Pengaturan</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <?php 
            if($_SESSION['hak_akses']=='admin'){ 
              $akun = 'p=akun-admin'; 
            }else if($_SESSION['hak_akses']=='siswa'){ 
              $akun = 'p=akun-siswa'; 
            } 
          ?>
          <li class="nav-item">
            <a class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], "$akun")) { print('active'); } ?>" href="index.php?<?= $akun;?>">
              <span data-feather="user"></span>
              Akun
            </a>
          </li>
          <?php 
            if($_SESSION['hak_akses']=='admin'){ 
              $help = 'p=bantuan-admin'; 
            }else if($_SESSION['hak_akses']=='siswa'){ 
              $help = 'p=bantuan-siswa'; 
            } 
          ?>
          <li class="nav-item">
            <a class="nav-link d-none <?php if(str_contains($_SERVER['QUERY_STRING'], "$help")) { print('active'); } ?>" href="index.php?<?= $help; ?>">
              <span data-feather="help-circle"></span>
              Bantuan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(str_contains($_SERVER['QUERY_STRING'], 'p=logout')) { print('active'); } ?>" href="index.php?p=logout">
              <span data-feather="log-out"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      <div class="container-fluid"><br>
        <!-- Content Row -->
        <div class="row">
        <?php
            $pages_dir='pages';
            if(!empty($_GET['p'])){
                $pages=scandir($pages_dir,0);
                unset($pages[0],$pages[1]);
                $p=$_GET['p'];
                if(in_array($p.'.php',$pages)){
                    include($pages_dir.'/'.$p.'.php');
                }else{
                    include($pages_dir.'/blank.php');
                }
            }else{
                if ($_SESSION['hak_akses']=='admin') {
                  include($pages_dir.'/dashboard-admin.php');
                }else if ($_SESSION['hak_akses']=='siswa') {
                  include($pages_dir.'/dashboard-siswa.php');
                } 
            }        
        ?>
        </div>
      </div>
    </main>
  </div>
</div>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/feather/dist/feather.min.js"></script>
	  <script src="assets/js/script.js"></script>
  </body>
</html>
<?php
}
else {
  echo "<script>
    alert('Anda Harus Login Dahulu!');
    window.location = 'pages/login.php';
  </script>";
}
?>