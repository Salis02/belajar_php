<?php

$angka = [4, 7, 12, 765, 93, 3, 71];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lat - Array</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: yellow;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    
    <!-- LOOPING PADA ARRAY -->

    <!-- 1. For  -->

    <?php for($i = 0 ; $i < count($angka); $i++){ ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- 2. Foreach -->

    <?php foreach ($angka as $a) {?>
        <div class="kotak"><?php echo $a ?></div>
    <?php } ?>   

    <div class="clear"></div>
    
    <?php foreach ($angka as $b) : ?>
        <div class="kotak"><?= $b ?></div>
    <?php endforeach ; ?>
</body>