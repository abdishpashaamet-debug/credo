<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/c927cf1132.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fons.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <?php
   include("component/nav.php");

   include("block/harmonienpa.php");

   include("component/footer.php");
   ?>

</body>

</html>