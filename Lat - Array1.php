<?php

$mahasiswa = [
    ["Salis Nizar Qomaruzaman", "203200140", "Teknik Informatika", "nizarsalis@gmail.com"],
    ["Abidzar Al Ghifari", "203200141", "Teknik Informatika", "nizar@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan - Array 2</title>

</head>
<body>

    <h3>Daftar Mahasiswa</h3>
 
    <!-- Array numerik => rawan ketuker data array-nya
    -->
    <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li>Nama    :<?= $mhs[0];?></li>
            <li>NIM     :<?= $mhs[1];?></li>
            <li>Jurusan :<?= $mhs[2];?></li>
            <li>Email   :<?= $mhs[3];?></li>
        </ul>
    <?php endforeach;  ?>
    
</body>