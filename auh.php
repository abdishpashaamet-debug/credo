<?php
session_start();
$email = $_GET["email"];
$password = $_GET["password"];
// print_r($email);
// print_r($password);
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "credo";
$dbcon = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$sql = "SELECT * FROM `users` WHERE email = '$email' ";
$querys = $dbcon->query($sql);
$row = $querys->fetch_assoc();
if ($row) {
    
    if ($row['password'] !== $password) {
        print_r('пароль не верный');
    } else {
        print_r('пароль верный');
        $_SESSION['auh'] = $row['id'];
    }
} else {
print_r('email не найден');
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

