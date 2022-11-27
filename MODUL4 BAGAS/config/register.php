<?php

include('..\config\connector_user.php');


if (isset($_POST['Daftar'])){
    $id = rand();
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $passw=$_POST['passw'];
    $no_hp=$_POST['no_hp'];
    $con_pass = $_POST['con_pass'];
    $sql = "INSERT INTO user_bagas(id,nama,email,password,no_hp) VALUES ('$id','$nama','$email','$passw','$no_hp')";
    $sql_cek = "SELECT email FROM user_bagas where email = '$email'";
    $cek = $con->query($sql_cek);

    if ($_POST['email'] == "" OR $_POST['passw'] == "" OR $_POST['con_pass'] == "" OR $_POST['no_hp'] == "" ){
        session_start();
        $_SESSION['register'] = 'isi';
        header('Location: ..\pages\Register-Bagas.php');
        exit;
    }

    if($_POST['passw'] != $_POST['con_pass']){
        session_start();
        $_SESSION['register'] = 'salah';
        header('Location: ..\pages\Register-Bagas.php');
        exit;
    }

    if ($cek -> num_rows > 0){
        session_start();
        while($row = $cek -> fetch_assoc()){
            $email = $_POST['email'];
            $email_cek = $row['email'];
        }
        if ($email == $email_cek){
            $_SESSION['register'] = 'gagal';
            header('Location: ..\pages\Register-Bagas.php');
            exit;
        }
    }
    if (mysqli_query($con,$sql)){
        session_start();
        $_SESSION['register'] = 'berhasil';
        header('Location: ..\pages\Login-Bagas.php'); 
    }
    else{
        header('Location: ..\pages\Register-Bagas.php');
    }
}
$con->close();
?>

