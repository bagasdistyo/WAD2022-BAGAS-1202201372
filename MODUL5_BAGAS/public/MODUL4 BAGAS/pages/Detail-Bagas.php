<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <?php
    include('..\config\connector.php');
    $query = mysqli_query($con,"SELECT id_mobil FROM `showroom_bagas_table`");
    $jumlah = mysqli_num_rows($query);
    $id_mobil=$_GET['id_mobil'];
    $ambil = mysqli_query($con, "SELECT * FROM `showroom_bagas_table` where id_mobil=$id_mobil");
    $isi = mysqli_fetch_assoc($ambil);
  ?>


<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav" style="padding-left: 100px;">
                    <a style="color: white;" class="nav-link active" aria-current="page"
                        href="HomeAwal.php">Home</a>
                        <?php
                            if ($jumlah == 0){
                                echo '<a class="nav-link" style="padding-left: 35px; padding-right:900px;color: white;" 
                                href="Add-Bagas.php">MyCar</a>';
                            }
                            else{
                                echo '<a class="nav-link" style="padding-left: 35px; padding-right:900px;color: white;" 
                                href="ListCar-Bagas.php">MyCar</a>';
                            }
                        ?>
                </div>
                <a class="btn btn-light" style="font-color:blue;" role="button"
                    href="Add-Bagas.php">Add Car</a>
                <div class="dropdown" style="padding-left: 30px;">
                    <a class="btn btn-light dropdown-toggle" style="font-color:blue;" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Bagas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Profil-Bagas.php">Profile</a>
                        </li>
                        <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="padding-top: 30px;">
        <h4>Mobil</h4>
        <a>Detail Mobil</a>
    </div>

    <br />

    <div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="col">
                <img src="../asset/image/<?php echo $isi['foto_mobil'];?>" class="card-img-top" alt="...">
            </div>
            <div class="col">
                <form action="./Edit-Bagas.php?id_mobil=<?=$isi['id_mobil']?>" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id_mobil" value="<?= $isi["id_mobil"];?>">
                    <div class="mb-3">
                        <label for="nama_mobil" class="form-label">Nama Mobil</label>
                        <input class="form-control" name="nama_mobil" id="nama_mobil" type="text"
                            placeholder="<?=$isi['nama_mobil']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="pemilik_mobil" class="form-label">Nama Pemilik</label>
                        <input class="form-control" name="pemilik_mobil" id="pemilik_mobil" type="text"
                            placeholder="<?=$isi['pemilik_mobil']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="merk_mobil" class="form-label">Merk</label>
                        <input class="form-control" name="merk_mobil" id="merk_mobil" type="text"
                            placeholder="<?=$isi['merk_mobil']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
                        <input class="form-control" name="tanggal_beli" id="tanggal_beli" type="date"
                            value="<?=$isi['tanggal_beli']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"
                            placeholder="<?= $isi["deskripsi"]; ?>" readonly></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto_mobil" class="form-label">Foto</label>
                        <input class="form-control" id="foto" type="file" name="foto_mobil">
                    </div>
                    <label for="status_pembayaran">Status Pembayaran</label></br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran"
                            placeholder="<?=$isi['status_pembayaran']?>" readonly>
                        <label class="form-check-label" for="Lunas">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran"
                            placeholder="<?=$isi['status_pembayaran']?>" readonly>
                        <label class="form-check-label" for="Belum Lunas">Belum Lunas</label>
                    </div>
                    <div style="padding-top: 30px;">
                        <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                    </div>


                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                        crossorigin="anonymous"></script>
</body>

</html>