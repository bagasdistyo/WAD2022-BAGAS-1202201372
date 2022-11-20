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
    $ambil = mysqli_query($kon, "SELECT * FROM `modul3`");
  ?>
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <div class="navbar-nav" style="padding-left: 100px;">
        <a style="color: white;" class="nav-link active" aria-current="page" href="../index.php">Home</a>
        <a class="nav-link" style="padding-left: 35px; padding-right:1030px; color: white;"href="ListCar-Bagas.php">MyCar</a>
        <a class="btn btn-light" style="font-color:blue;" href="Add-Bagas.php" role="button">Add Car</a>
      </div>
    </div>
  </div>
  </nav>

  <div class="container" style="padding-top: 20px;">
      <h4>My Show Room</h4>
      <a>List Show Room Bagas - 1202201372</a>   
  </div>

  
    <?php
    while ($isi = mysqli_fetch_array($ambil)){
    ?>
    <br/>
    <div class="container">
    <div class="card" style="width: 18rem;">
    <img src="../asset/image/<?php echo $isi['foto_mobil'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $isi['nama_mobil'];?></h5>
            <p class="card-text"><?= $getDeskripsi = $isi['deskripsi'];
            echo $getDeskripsi;?></p>
            <div class="row">
                <div class="col">
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>

                <div class="col">
                    <a href="#" class="btn btn-danger">Delete</a> 
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php
}
?>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
