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
  <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'berhasil') {$_SESSION['register'] = ''; ?>
  <div class="alert alert-success m-0 p-2 alert-dismissible" role="alert">Berhasil Registrasi, Silahkan Login
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>

  <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'salah') {$_SESSION['login'] = ''; ?>
  <div class="alert alert-danger m-0 p-2 alert-dismissible" role="alert">Username atau Password salah
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>
  
  <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'isi') {$_SESSION['login'] = ''; ?>
  <div class="alert alert-danger m-0 p-2 alert-dismissible" role="alert">Silahkan Isi Form dengan Lengkap
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>

  <?php if (isset($_SESSION['logout']) && $_SESSION['logout'] == 'logout') {$_SESSION['logout'] = ''; ?>
  <div class="alert alert-success m-0 p-2 alert-dismissible" role="alert">Anda Berhasil Logout
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>

  <body>

  <div class="container">
    <div class="row">
        <div class="col">
            <img src="../asset/image/Ferrari 458.jpg" style="padding-top: 180px;" alt="Tesla">
        </div>
        <div class="col" style="padding-top: 180px;">
        <h3><b>Login</b></h3>
        <form action="../config/login.php" method="POST">
            <div class="mb-3" style="padding-top: 20px;">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" name="email" id="email" type="email">
            <div class="mb-3">
                <label for="passw" class="form-label">Kata Sandi</label>
                <input class="form-control" name="passw" id="passw" type="password">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="remember" name="remember"id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember Me
                </label>
            </div>
            </div>
            <div style="padding-top: 10px;">
                <button type="submit" class="btn btn-primary" role="button" name="Login">Login</button>
            </div>
            <div>
                <a> Anda belum punya akun ? </a>
                <a href="Register-Bagas.php">Daftar</a>
            </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>


