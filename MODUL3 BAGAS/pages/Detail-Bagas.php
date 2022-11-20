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
    include('..\config\connector.php');
    $query = mysqli_query($kon,"SELECT id_mobil FROM `modul3`");
    $jumlah = mysqli_num_rows($query);
  ?>

  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <div class="navbar-nav" style="padding-left: 100px;">
        <a style="color: white;" class="nav-link active" aria-current="page" href="../index.php">Home</a>
        <?php
          if ($jumlah == 0){
              echo '<a class="nav-link" style="padding-left: 35px; color: white;"href="Add-Bagas.php">MyCar</a>';
            }
          else{
              echo '<a class="nav-link" style="padding-left: 35px; color: white;" href="ListCar-Bagas.php">MyCar</a>';
            }
        ?>
      </div>
    </div>
  </div>
  </nav>

  <div class="container" style="padding-top: 100px;">
      <h4>Mobil</h4>
      <a>Detail Mobil</a>   
  </div>

  <?php
    while ($isi = mysqli_fetch_array($ambil)){
    ?>
    <br/>

  <div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col">
            <img src="../asset/image/<?php echo $isi['foto_mobil'];?>" class="card-img-top" alt="...">
        </div>
        <div class="col">
        <?php
}
?>           
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>



<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col">
            <img src="../asset/image/<?php echo $isi['foto_mobil'];?>" class="card-img-top" alt="...">
        </div>
        <div class="col">