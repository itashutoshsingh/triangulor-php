<?php
session_start();
unset($_SESSION["sessdata"]);
header("location:home.php")
?>