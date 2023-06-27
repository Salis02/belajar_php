<?php

require '4. PHP + MYSQLI function.php'; //memanggil file function
$karyawan = query ("SELECT * FROM karyawan");

    //ambil data dari tabel karyawan / query data karyawan
    //kita gunakan function php mysqli_query
   //$query = mysqli_query($koneksi, "SELECT * FROM karyawan"); 
   //hati-hati berhasil tidaknya tidak ditampilkan (menghasilkan nilai boolean), solusinya kita masukkan ke dalam variabel

    //ambil data (fetch) karyawan dari object result:

    //mysqli_fetch_row() => mengembalikan index array numerik
    // $data_row = mysqli_fetch_row($query);
    // var_dump($data_row[3]);

    //mysqli_fetch_assoc() => mengembalikan index array asosiatif
    // while($data_assoc = mysqli_fetch_assoc($query)){
    //     var_dump($data_assoc);
    // }

    //mysqli_fetch_array() => mengembalikan keduanya, index array numerik dan asosiatif, kurangnya kedua array disajikan double
    // $data_array=mysqli_fetch_array($query);
    // var_dump($data_array);

    //mysqli_fetch_object()
    // $data_object = mysqli_fetch_object($query);
    // var_dump($data_object->nama);


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP + MYSQL</title>
  </head>
  <body>
    
    <h1>Belajar menghubungkan PHP dan MySQL</h1>
    <li>Ekstensi MYSQLi</li>
    <li>PDO (PHP Data Obejct)</li>
    <p>Kali ini kita akan menggunakan ekstensi mysqli karena i-nya berarti improvement</p>


    
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Id</td> 
                <td>Gambar</td> 
                <td>Nama</td> 
                <td>Jabatan</td> 
                <td>Email</td> 
                <td>Hobi</td>
                <td>Aksi</td>
            </tr> 
        </thead> 
        <tbody>
        <?php $i=1; ?>
        <?php foreach ($karyawan as $row): ?>
            <tr>
                <td><?= $i;?></td>
                <td><img src=".img/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jabatan"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["hobi"]; ?></td>
                <td>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>