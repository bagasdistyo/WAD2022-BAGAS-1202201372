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
            <p class="card-text"><?= $isi['deskripsi'];?></p>
            <div class="row">
                <div class="col">
                    <a href="Detail-Bagas.php?id_mobil=<?php echo $isi['id_mobil']; $data1['id'];?>" class="btn btn-primary" name="id">Detail</a>
                </div>

                <div class="col">
                    <a href="../config/delete.php?id_mobil=<?php echo $isi['id_mobil']; $data1['id'];?>" class="btn btn-danger" name="delete">Delete</a> 
                </div>
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
