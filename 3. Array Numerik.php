<?php

    // ARRAY 
    // => variabel yang dapat memiliki banyak nilai dan tipe data yang berbeda
    // => pasangan key (index dimulai dari 0) dan value
    //1. membuat array
        //cara lama
            $hari = array('Senin','Selasa','Rabu');
        //cara baru
            $bulan = ['Januari', 'Februari', 'Maret'];
            $arr1 = [123, 'tulisan', false];

    //2. menampilkan array
        //var_dump() / print_r
            // var_dump($arr1);
            // var_dump($bulan);
            // echo '<br>';
            // print_r($hari);
            // print_r($arr1);

        //menampilkan satu element array
            // echo $arr1[1];
            // echo $bulan[2];

    //3. menambahkan element baru pada array
        var_dump($bulan);
        $bulan[] = 'April';
        $bulan[] = 'Mei';
        var_dump($bulan);

?>