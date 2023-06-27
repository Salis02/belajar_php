<?php
    function salam($waktu = 'datang', $nama = 'salis'){ //PHP mengharuskan mengisi nilai parameter, kalau di js menampilkan 'undefined'
        //parameter default akan ditimpa dengan parameter yang dimasukkan user
        echo "Selamat $waktu $nama";
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
    <h3><?php echo salam(); ?></h3>
    <h3><?php echo salam('pagi'); ?></h3>
    <h3><?php echo salam('malam','nizar'); ?></h3>
</body>