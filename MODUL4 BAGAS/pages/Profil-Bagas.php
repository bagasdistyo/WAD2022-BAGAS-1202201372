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
  
  <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == 'salah') {$_SESSION['edit'] = ''; ?>
  <div class="alert alert-danger m-0 p-2 alert-dismissible" role="alert">Password Tidak Cocok dengan Konfirmasi Password !
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>

  <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == 'isi') {$_SESSION['edit'] = ''; ?>
  <div class="alert alert-danger m-0 p-2 alert-dismissible" role="alert">Silahkan Isi Form dengan Lengkap
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>

  <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == '') {$_SESSION['edit'] = ''; ?>
  <div class="alert alert-success m-0 p-2 alert-dismissible" role="alert">Data Berhasil di Ubah
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>

  <body>
  <?php
    include('..\config\connector.php');
    $query = mysqli_query($kon,"SELECT id_mobil FROM `modul3`");
    $jumlah = mysqli_num_rows($query);
  ?>

  <?php
    include('../config/connector_user.php');
    $id = $_GET['id'];
    $data = mysqli_query($con, "SELECT * FROM `user_bagas` where id=$id");
    $data1 = mysqli_fetch_assoc($data);
  ?>

  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <div class="navbar-nav" style="padding-left: 100px;">
        <a style="color: white;" class="nav-link active" aria-current="page" href="HomeAwal.php?id=<?php echo $data1['id']; ?>">Home</a>
        <a class="nav-link" style="padding-left: 35px; padding-right:900px;color: white;" href="ListCar-Bagas.php?id=<?php echo $data1['id']; ?>">MyCar</a>
      </div>
      <a class="btn btn-light" style="font-color:blue;" role="button" href="Add-Bagas.php?id=<?php echo $data1['id']; ?>">Add Car</a>
        <div class="dropdown" style="padding-left: 30px;" >
            <a class="btn btn-light dropdown-toggle" style="font-color:blue;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$data1['nama']?>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Profil-Bagas.php?id=<?php echo $data1['id'];?>">Profile</a></li>
                <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
  </div>
  </nav>

  <div class="container">
    <h3 style="text-align:center; padding-top: 30px;"><b>Profile</b></h3>
    <form action="../config/edit_user.php?id=<?=$data1['id']?>" method="POST">
            <div class="mb-3" style="padding-top: 20px;">
                <label for="email" class="form-label">Email*</label>
                <input class="form-control" name="email" id="email" type="email" placeholder="<?=$data1['email']?>" disabled>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input class="form-control" name="nama" id="nama" type="text" value="<?=$data1['nama']?>" >
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor Handphone*</label>
                <input class="form-control" name="no_hp" id="no_hp" type="number" value="<?=$data1['no_hp']?>" >
            </div>
            <div class="mb-3">
                <label for="passw" class="form-label">Kata Sandi*</label>
                <input class="form-control" name="passw" id="passw" type="password" placeholder="Kata Sandi">
            </div>
            <div class="mb-3">
                <label for="con_pass" class="form-label">Konfirmasi Kata Sandi*</label>
                <input class="form-control" name="con_pass" id="con_pass" type="password" placeholder="Konfirmasi Kata Sandi">
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">Warna Navbar</label>
                <input class="form-control" name="warna" id="warna" type="text">
            </div>
            <div style="padding-top: 10px;" class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" role="button" name="update">Update</button>
            </div>
            <div style="padding-top: 50px;">
                <img src="../asset/image/Logo-EAD.png" class="card-img-top" alt="Logo EAD" style="width: 100px">
                <a style="padding-left: 30px;">Bagas_1202201372</a>
            </div>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

