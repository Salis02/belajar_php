<?php
        // Built-in function (Date/Time)
            //Date
            // echo date('l, d-M-Y');
            

            //Time
                //UNIX Timestamp / EPOCH Time
                    // Detik yang sudah berlalu sejak 1 Januari 1970 (waktu kesepakatan untuk launch teknologi)
            // echo time();

            echo date('d M Y', time()+60*60*24*100);

            //mktime
                //membuat sendiri detik
                //mktime(0,0,0,0,0,0)
                //jam, menit, detik, bulan, tanggal, tahun
                echo date("l", mktime(0,0,0,9,2,2001));

            //strtotime
            echo date("l", strtotime("2 Sep 2001"));

        // Built-in function (String)
            //strlen() => menghitung panjang/length string
            //strcmp() => membandingkan 2 buah string
            //explode() => memecah string menjadi array
            //htmlspecialchars() => untuk menjaga dari hacker
        
        //Built-in function (Utility)
            //var_dump() => untuk mencetak isi variabel, array, objek
            //isset() => mengecek sebuah variabel apakah sudah dibuat apa belum (boolean)
            //empty() => mengecek apakah variabel yang ada, masih kosong?
            //die() => memberhentikan program
            //sleep() => memberhentikan sementara, dengan tempo waktu tertentu


        //User-defined Function
?>