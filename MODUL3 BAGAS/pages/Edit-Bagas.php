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
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <div class="navbar-nav" style="padding-left: 100px;">
        <a style="color: white;" class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" style="padding-left: 35px; color: white;"href="pages/Add-Bagas.php">MyCar</a>
      </div>
    </div>
  </div>
  </nav>

  <div class="container" style="padding-top: 100px;">
      <h4>Mobil</h4>
      <a>Detail Mobil</a>   
  </div>
  <div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col">
            <img src="asset/image/Mercedes.jpeg" alt="Mercedes">
        </div>
        <div class="col">
            <div>
            <form action="" method="post">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                <input class="form-control" name="nama_mobil" type="text" placeholder="Mercedes C200">
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                <input class="form-control" name="nama_pemilik" type="text" placeholder="Bagas - 1202201372">
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input class="form-control" name="merk" type="text" placeholder="Mercedes">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Tanggal Beli</label>
                <input class="form-control" name="date" type="date" placeholder="dd / mm / yyyy">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="desc" rows="3" placeholder="Mercedes Benz C-Class Sedan C 200 Avantgarde Line adalah 5 Kursi Sedan yang tersedia seharga Rp 1,12 Milyar di Indonesia. Mobil ini tersedia dalam 3 warna dan Otomatis opsi transmisi di Indonesia. Dimensi C-Class Sedan C 200 Avantgarde Line adalah 4686 mm L x 1810 mm W x 1442 mm H. Lebih dari 2 pengguna telah memberikan penilaian untuk C-Class Sedan C 200 Avantgarde Line berdasarkan fitur, jarak tempuh, kenyamanan tempat duduk dan kinerja mesin."></textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control" type="file" name="foto">
            </div>
            <div>
            Status Pembayaran
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Status" id="Status1" value="Lunas">
                <label class="form-check-label" for="Status1">Lunas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Status" id="Status2" value="Belum Lunas">
                <label class="form-check-label" for="Status2">Belum Lunas</label>
            </div>
            <div style="padding-top: 30px;">
            <a class="btn btn-primary" href="" role="button">Selesai</a>
            </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>