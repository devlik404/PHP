+**<?php
//cek apakah tidak ada data di $_get
if ( !isset($_GET["image"]) ||
    !isset($_GET["judul"]) ||
    !isset($_GET["studio"]) ||
    !isset($_GET["status"]) ||
    !isset($_GET["season"]) ||
    !isset($_GET["dirilis"]) ||
    !isset($_GET["durasi"]) ||
    !isset($_GET["tipe"]) ||
    !isset($_GET["genre"]) 

){
//redirect
header("Location: latihan1.php");
exit;



}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail anime</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["image"]; ?>" ></li>
        <li><?= $_GET["judul"]; ?></li>
        <li><?= $_GET["studio"]; ?></li>
        <li><?= $_GET["status"]; ?></li>
        <li><?= $_GET["season"]; ?></li>
        <li><?= $_GET["dirilis"]; ?></li>
        <li><?= $_GET["durasi"]; ?></li>
        <li><?= $_GET["tipe"]; ?></li>
        <li><?= $_GET["genre"]; ?></li>

    </ul>

    <a href="latihan1.php">kembali</a>

</body>
</html>