<?php session_start(); ?>
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
  include('../config/connector.php');
  $query = mysqli_query($con, "SELECT id_mobil FROM `showroom_bagas_table`");
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

    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col">
                <div>
                    <h1 style="padding-top: 25px; font-size:50px;">Selamat Datang Di Showroom Bagas</h1>
                </div>
                <div style="padding-top: 10px;">
                    <a>Bienvenido a la sala de exhibición de bagas, ofrecemos una gran selección de autos, desde los
                        precios más baratos hasta los más caros</a>
                </div>
                <div style="padding-top: 30px;">
                    <?php
                        if ($jumlah == 0){
                            echo '<a class="btn btn-primary" href="Add-Bagas.php" role="button">MyCar</a>';
                        }
                        else{
                            echo '<a class="btn btn-primary" href="ListCar-Bagas.php" role="button">MyCar</a>';
                        }
                    ?>
                </div>
                <div style="padding-top: 50px;">
                    <img src="../asset/image/Logo-EAD.png" class="card-img-top" alt="Logo EAD" style="width: 100px">
                    <a style="padding-left: 30px;">Bagas_1202201372</a>
                </div>
            </div>
            <div class="col">
                <img src="../asset/image/Mercedes.jpeg" alt="Mercedes">
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
</body>

</html>