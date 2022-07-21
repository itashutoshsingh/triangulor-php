<?php 
session_start();

if(!isset($_SESSION["sessdata"]))header("location:admin-login.php")

?>