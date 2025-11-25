<?php
$userid = $_SESSION['auh'] ?? 0;
$user = false;
if ($userid) {
    $sqlauh = "SELECT * FROM `users` WHERE id = '$userid' ";
    $querysauh = $dbcon->query($sqlauh);
    if ($querysauh) {
        $user = $querysauh->fetch_assoc();
    }
}
