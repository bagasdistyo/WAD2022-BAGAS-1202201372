<?php
  
  $kon = mysqli_connect("localhost","root","","showroom_bagas_table");
  if (!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>