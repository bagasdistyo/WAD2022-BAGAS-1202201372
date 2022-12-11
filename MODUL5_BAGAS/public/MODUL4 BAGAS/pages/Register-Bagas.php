<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    </style>
  </head>
  <?php include('../config/register.php');?>
  <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'gagal') {$_SESSION['register'] = ''; ?>
  <div class="alert alert-warning m-0 p-2 alert-dismissible" role="alert">Email Anda sudah pernah terdaftar !
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>
  
  <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'isi') {$_SESSION['register'] = ''; ?>
  <div class="alert alert-danger m-0 p-2 alert-dismissible" role="alert">Silahkan Isi Form yang Lengkap !
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>

  <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'salah') {$_SESSION['register'] = ''; ?>
  <div class="alert alert-danger m-0 p-2 alert-dismissible" role="alert">Password Tidak Cocok dengan Konfirmasi Password !
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>

  <body>
  <div class="container">
    <div class="row">
        <div class="col">
            <img src="../asset/image/Ferrari 458.jpg" style="padding-top: 180px;" alt="Tesla">
        </div>
        <div class="col" style="padding-top: 80px;">
        <h3><b>Register</b></h3>
        <form action="../config/register.php" method="POST">
            <div class="mb-3" style="padding-top: 20px;">
                <label for="email" class="form-label">Email*</label>
                <input class="form-control" name="email" id="email" type="email">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input class="form-control" name="nama" id="nama" type="text">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor Handphone*</label>
                <input class="form-control" name="no_hp" id="no_hp" type="text">
            </div>
            <div class="mb-3">
                <label for="kata_sandi" class="form-label">Kata Sandi*</label>
                <input class="form-control" name="passw" id="kata_sandi" type="password">
            </div>
            <div class="mb-3">
                <label for="con_pass" class="form-label">Konfirmasi Kata Sandi*</label>
                <input class="form-control" name="con_pass" id="con_pass" type="password">
            </div> 
            <div style="padding-top: 10px;">
                <button type="submit" class="btn btn-primary" role="button" name="Daftar">Daftar</button>
            </div>
            <div>
                <a> Anda sudah punya akun ? </a>
                <a href="Login-Bagas.php">Login</a>
            </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<!-- <div class="mb-3">
                <label for="nama" class="form-label">Nama<label>
                <input class="form-control" name="nama" id="nama" type="text" placeholder="Nama">
            </div> -->
