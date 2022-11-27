<?php
include('..\config\connector_user.php');

if (isset($_POST['Login'])){
    $email=$_POST['email'];
    $passw=$_POST['passw'];
    $remember=$_POST['remember'];
    $check = mysqli_query($con, "SELECT * FROM user_bagas WHERE email = '$email'");
    $check_login = mysqli_fetch_assoc($check);
    $id = $check_login['id'];
    if ($passw != $check_login['password'] or $email != $check_login['email']){
        session_start();
        $_SESSION['login'] = 'salah';
        header('Location: ..\pages\Login-Bagas.php');
        exit;
    }
    if ($_POST['email'] == "" OR $_POST['passw'] == ""){
        session_start();
        $_SESSION['login'] = 'isi';
        header('Location: ..\pages\Login-Bagas.php');
        exit;
    }
    if(!empty($_POST["remember"])) {
        //buat cookie

        setcookie ("user_login",$check_login["email"],time()+ 60);
        setcookie ("user_password",$check_login["password"],time()+ 60);
    } 
    if ($passw == $check_login['password'] && $email == $check_login['email']){
        session_start();
        $_SESSION['login'] = 'berhasil';
        header('Location: ../pages/HomeAwal.php?id='.$check_login['id']);
        exit;
    } 
}
