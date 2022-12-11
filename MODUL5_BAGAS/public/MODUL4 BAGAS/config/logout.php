<?php
include('..\config\connector.php');
session_start();
unset($_SESSION["login"]);
$_SESSION["logout"] = "logout";
header("Location: ../pages/Login-Bagas.php");
exit;

?>