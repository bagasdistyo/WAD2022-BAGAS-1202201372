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
  <body>

  <?php
    include('./config/connector.php');
    $query = mysqli_query($con,"SELECT id_mobil FROM `showroom_bagas_table`");
    $jumlah = mysqli_num_rows($query);
  ?>
  
<nav class="navbar navbar-expand-lg bg-primary">
<div class="container-fluid">
  <div class="collapse navbar-collapse">
    <div class="navbar-nav" style="padding-left: 100px;">
      <a style="color: white; padding-right:1200px;" class="nav-link active" aria-current="page" href="index.php">Home</a>
      <a style="color: white;" class="nav-link active" aria-current="page" href="pages/Login-Bagas.php">Login</a>
    </div>
  </div>
</div>
</nav>

<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col">
            <div>
                <h1 style="padding-top: 25px; font-size:50px;">Selamat Datang Di Showroom</h1>
            </div>
            <div style="padding-top: 10px;">
                <a>Bienvenido a la sala de exhibición de bagas, ofrecemos una gran selección de autos, desde los precios más baratos hasta los más caros</a>
            </div>
            <div style="padding-top: 100px;">
            
                <img src="asset/image/Logo-EAD.png" class="card-img-top" alt="Logo EAD" style="width: 100px">
                <a style="padding-left: 30px;">Bagas_1202201372</a>
            </div>
        </div>
        <div class="col">
            <img src="asset/image/Mercedes.jpeg" alt="Mercedes">
        </div>       
  </div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>