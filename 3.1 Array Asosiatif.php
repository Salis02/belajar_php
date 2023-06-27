<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lat - Array 3</title>

    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1.5s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>

<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]; //array multidimensi

//cara menampilkan elemen, misal 5 ;
//echo $angka{1}[1];
?>

<!--<?php foreach ($angka as $ang) : ?>
    <div class="kotak"><?= $ang[0]; ?></div>
    <div class="kotak"><?= $ang[1]; ?></div>
    <div class="kotak"><?= $ang[2]; ?></div>
<?php endforeach ; ?>
     -->

    <?php foreach ($angka as $a) :?>
        <?php foreach ($a as $b) :?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach ; ?>
        <div class="clear"></div>
    <?php endforeach ;  ?>

    <!-- ARRAY ASOSIATIF -->
    <!-- Definisnya sama seperti array numerik, kecuali key-nya adalah string yang kita buat sendiri -->

    <?php
    $mahasiswa = [
        [
        "nama" => "Nizar",
        "NIM" => "203200140",
        "email" => "nizarsalis@gmail.com",
        "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Salis",
            "NIM" => "203200140",
            "email" => "nizarsalis@gmail.com",
            "jurusan" => "Teknik Kimia"
        ],
        [
            "nama" => "Qomaruzaman",
            "NIM" => "203200140",
            "email" => "nizarsalis@gmail.com",
            "jurusan" => "Teknik Informasi",
            "nilai" => [90,95,100]
        ]
    ];

echo $mahasiswa[2]["nilai"];

    ?> 

</body>