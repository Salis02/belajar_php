<?php

//Variabel Scope / lingkup variabel

// $x = 10; //ini adalah variabel global

// function tampilX(){
//     //variabel lokal untuk function ini saja
//     // $x = 20;

//     //untuk memanggil variabel global dalam function
//     global $x;
//     echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

//Superglobals

// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV


    //$_GET
    //Cara memasukkan data menggunakan metode request get akan ditangkap $_GET
    //http://localhost/belajar_php/Lat%20-%20GetPost.php?nama=%20Salis&NIM%20=%20203200140
    // var_dump($_GET);
?>

<?php

//$_GET
$karyawan =[
    [
        "Nama" => "Salis",
        "Jabatan" => "Software Engineer",
        "Email" => "zamanqomar09@gmail.com",
        "Hobi" => "Coding",
        "Gambar" => "Salis.jpg"
    ],
    [
        "Nama" => "Nizar",
        "Jabatan" => "Data Scientist",
        "Email" => "zamanqomar09@gmail.com",
        "Hobi" => "Coding",
        "Gambar" => "Nizar.jpg"
    ],
    [
        "Nama" => "Qomaruzaman",
        "Jabatan" => "Project Manager",
        "Email" => "zamanqomar09@gmail.com",
        "Hobi" => "Manajemen dan Progresif",
        "Gambar" => "Qomaruzaman.jpg"
    ],
    [
        "Nama" => "Abidzar",
        "Jabatan" => "UX/UI Designer",
        "Email" => "zamanqomar09@gmail.com",
        "Hobi" => "Manajemen",
        "Gambar" => "Abidzar.jpg"
    ],
    [
        "Nama" => "Al Ghifari",
        "Jabatan" => "Quality Assurance",
        "Email" => "zamanqomar09@gmail.com",
        "Hobi" => "Desain",
        "Gambar" => "Al Ghifari.jpg"
    ],

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lat - Post/Get</title>

</head>
<body>

    <!-- $_GET -->
    <div class="get-post">
        <div class="get">
            <h1>Belajar dengan method $_GET</h1>
            <h2>Data Pendiri Startup</h2>
            <ul>
            <?php foreach($karyawan as $a) : ?>
                <li><a href="Lat - GetPost1.php?nama=<?= $a["Nama"]; ?>&jabatan=<?= $a["Jabatan"]; ?>&email=<?= $a["Email"] ?>&hobi=<?= $a["Hobi"] ?>&gambar=<?= $a["Gambar"]; ?>"><?= $a["Nama"] ?></a></li>
                        <?php endforeach; ?>        
            </ul>
        </div>
    <hr>
        <!-- $_POST -->
        <div class="post">
            <h1>Belajar dengan method $_POST</h1>

            <?php
            
                if (isset($_POST["submit"])) :?>
                <!-- cara bacanya :"Jika tombol submit belum dipencet, jangan ditampilkan h1-nya" -->
                    <h1>Selamat datang, <?= $_POST["nama"]; ?> </h1>
                <?php endif ;?>
            <!-- NB :
            Dalam method $_POST, kita harus menggunakan form, dengan 2 attribute wajib : action="" dan method=""
            -->
            <!-- jika action ataupun methodnya kosong maka akan diberikan nilai default -->
            <!-- <form action="Lat - GetPost2.php" method="post"> -->
            <form action="" method="post">
                <!-- jika kita menggunakan method get, maka inputan akan tampil di url -->
                Masukkan nama :<br>
                <input type="text" name="nama">
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>


</body>