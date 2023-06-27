<?php
    //koneksi ke database
    //kita gunakan function php mysqli_connect
    $koneksi = mysqli_connect("localhost","root","","karyawan");

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query); 
        $rows=[];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
?>

