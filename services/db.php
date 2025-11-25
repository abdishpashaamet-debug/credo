<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "credo";
$dbcon = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
?>