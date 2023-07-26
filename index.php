<?php

require_once './koneksi.php';
require_once './class/Siswa.php';

$allSiswa = Siswa::getAll();

session_start();



// if($_SESSION['hasLogin'] !== true ) {
//   header('Location: ./login.php');
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,900;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./styles/index.css">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">DIGITAL TALENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo !isset($_GET['p'])  ? 'active' : ''; ?>" aria-current="page" href="./index.php">Calon Peserta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo isset($_GET['p']) && $_GET['p'] == 'daftar' ? 'active' : ''; ?>" href="?p=daftar">Daftar Siswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </header>
  <main class="container  py-5">
    <?php if(isset($_GET['success-daftar']) && $_GET['success-daftar'] == true): ?>
      <div class="alert alert-success" role="alert">
        Siswa Berhasil <strong>Terdaftar</strong>
      </div>
    <?php elseif(isset($_GET['success-daftar']) && $_GET['success-daftar'] == false): ?>
      <div class="alert alert-danger" role="alert">
        Siswa Gagal <strong>Terdaftar</strong>
      </div>
    <?php elseif(isset($_GET['success-edit']) && $_GET['success-edit'] == true): ?>
      <div class="alert alert-success" role="alert">
        Siswa Berhasil <strong>Diedit</strong>
      </div>
    <?php elseif(isset($_GET['success-edit']) && $_GET['success-edit'] == false): ?>
      <div class="alert alert-danger" role="alert">
        Siswa gagal <strong>Diedit</strong>
      </div>
    <?php elseif(isset($_GET['success-delete']) && $_GET['success-delete'] == true): ?>
      <div class="alert alert-success" role="alert">
        Siswa Berhasil <strong>Dihapus</strong>
      </div>
    <?php elseif(isset($_GET['success-delete']) && $_GET['success-delete'] == false): ?>
      <div class="alert alert-danger" role="alert">
        Siswa Gagal <strong>Dihapus</strong>
      </div>
      <?php endif;?>
    <?php if(isset($_GET['p']) && $_GET['p'] == 'daftar') : ?>
      <?php include('./pages/tambah-peserta.php');?>
    <?php elseif( isset($_GET['p']) && $_GET['p'] == 'edit-peserta'):?>
      <?php include('./pages/edit-peserta.php')?>
    <?php elseif( !isset($_GET['p'])):?>
      <?php include('./pages/beranda.php')?>
    <?php endif;?>
  </main>
</body>
</html>