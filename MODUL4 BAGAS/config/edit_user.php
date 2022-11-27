<?php

include('..\config\connector_user.php');

$id = $_GET[("id")];
$query = mysqli_query($con, "SELECT * FROM user_bagas WHERE id = $id");
$hasil = mysqli_fetch_assoc($query);
if (isset($_POST['update'])){
    $id=$_GET['id'];
    $nama=$_POST['nama'];
    $no_hp=$_POST['no_hp'];
    $passw=$_POST['passw'];
    $con_pass=$_POST['con_pass'];

    $query = mysqli_query($con,"UPDATE user_bagas SET id='$id', nama='$nama', no_hp='$no_hp', password='$passw' WHERE id='$id'");

    if($_POST['passw'] != $_POST['con_pass']){
        session_start();
        $_SESSION['edit'] = 'salah';
        header('Location: ..\pages\Profil-Bagas.php?id='.$hasil['id']);
        exit;
    }
    if ($_POST['passw'] == "" OR $_POST['con_pass'] == "" OR $_POST['no_hp'] == "" ){
        session_start();
        $_SESSION['edit'] = 'isi';
        header('Location: ..\pages\Profil-Bagas.php?id='.$hasil['id']);
        exit;
    }
    if ($query){
        session_start();
        $_SESSION['edit'] = 'berhasil';
        header('Location: ..\pages\Profil-Bagas.php?id='.$hasil['id']);
        exit;
    } 
}
?>


