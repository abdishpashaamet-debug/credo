<?php
$email = $_GET["email"];
$password = $_GET["password"];
print_r($email);
print_r($password);
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "credo";
$dbcon = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$sql = "SELECT * FROM `users`" ;
$querys = $dbcon->query($sql);
$row = $querys->fetch_assoc();

print_r($row);
?>