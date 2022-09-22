<?php
session_start();
$_SESSION['user']="";

$_SESSION['admin']="";
header("location:../home.php");
?>
