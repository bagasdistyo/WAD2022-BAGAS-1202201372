<?php session_start();?>
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
        <h4>Tambah Mobil</h4>
        <a>Tambah Mobil Baru Anda Ke List Showroom</a>

        <div style="padding-top: 35px;">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_mobil" class="form-label">Nama Mobil</label>
                    <input class="form-control" name="nama_mobil" id="nama_mobil" type="text"
                        placeholder="Mercedes C200">
                </div>
                <div class="mb-3">
                    <label for="pemilik_mobil" class="form-label">Nama Pemilik</label>
                    <input class="form-control" name="pemilik_mobil" id="pemilik_mobil" type="text"
                        placeholder="Bagas - 1202201372">
                </div>
                <div class="mb-3">
                    <label for="merk_mobil" class="form-label">Merk</label>
                    <input class="form-control" name="merk_mobil" id="merk_mobil" type="text" placeholder="Mercedes">
                </div>
                <div class="mb-3">
                    <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
                    <input class="form-control" name="tanggal_beli" id="tanggal_beli" type="datetime-local"
                        placeholder="01/01/2022">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"
                        placeholder="Mercedes Benz C-Class Sedan C 200 Avantgarde Line adalah 5 Kursi Sedan yang tersedia seharga Rp 1,12 Milyar di Indonesia. Mobil ini tersedia dalam 3 warna dan Otomatis opsi transmisi di Indonesia. Dimensi C-Class Sedan C 200 Avantgarde Line adalah 4686 mm L x 1810 mm W x 1442 mm H. Lebih dari 2 pengguna telah memberikan penilaian untuk C-Class Sedan C 200 Avantgarde Line berdasarkan fitur, jarak tempuh, kenyamanan tempat duduk dan kinerja mesin."></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto_mobil" class="form-label">Foto</label>
                    <input class="form-control" id="foto" type="file" name="foto_mobil">
                </div>
                <label for="status_pembayaran">Status Pembayaran</label></br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran"
                        value="Lunas">
                    <label class="form-check-label" for="Lunas">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran"
                        value="Belum Lunas">
                    <label class="form-check-label" for="Belum Lunas">Belum Lunas</label>
                </div>
                <div style="padding-top: 30px;">
                    <button type="submit" class="btn btn-primary" role="button" name="submit">Selesai</button>
                </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>