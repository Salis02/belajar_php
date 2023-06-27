<?php

//$_GET 
//url hanya bisa menggunakan URL
//cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) ||
    !isset($_GET["jabatan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["hobi"])||
    !isset($_GET["gambar"]) ){
    //redirect
    header("Location: Lat - GetPost.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

</head>
<body>
    <ul>
        <img src="img/<?= $_GET["gambar"] ?>" alt="">
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["jabatan"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["hobi"] ?></li>
    </ul>

    <button><a href="Lat - GetPost.php">Kembali</a></button>
</body>