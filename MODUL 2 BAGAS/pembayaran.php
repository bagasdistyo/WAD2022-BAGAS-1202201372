<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Modul 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <style>
    p { font-size: 14px;}
  </style>

<body>
<?php
$bookno = rand();
$name = $_POST['nama'];
$date = $_POST['date'];
$time = $_POST['time'];
$duration = $_POST['duration'];
$car_type = $_POST['car_type'];
$nohp = $_POST['nohp'];
$service = $_POST['service'];
$checkin = date('d-m-Y H:i:s', strtotime("$date $time"));
?>
<nav>
<ul class="nav justify-content-center" style="background-color: black;">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="index.php" style="color:white">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="menu_booking.php" style="color:white">Booking</a>
    </li>
</ul>
</nav>

<div class="container">
    <p>&nbsp</p>
    <h5 class="text-center">Thank You BAGAS_1202201372 for Reserving</h5>
    <h6 class="text-center">Please double check your reservation details</h6>
    <p>&nbsp</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service(s)</th>
                <th scope="col">Total Service</th>
            </tr>
            <tbody>
                <tr>
                <th scope="row"><?php echo $bookno?></th>
                <td><?php echo $name?></td>
                <td><?php echo $checkin?></td>
                <td></td>
                <td><?php echo $car_type?></td>
                <td><?php echo $nohp?></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
        </thead>
    </table>


</div>
    <footer>
        <p>&nbsp</p>
        <p align="center" style="background-color: ghostwhite;">Created by BAGAS DISTYO UTOMO_1202201372</p>
    </footer>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>