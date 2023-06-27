<?php

    // PENGULANGAN
    // - for 
    // - while 
    // - do .... while 
    // - foreach 


    for($i = 0 ; $i <= 10 ; $i++){
        echo "Salis Nizar Qomaruzaman <br>";
    }

    $i = 0;
    while($i < 5){ //apakah i kurang dari 5
        echo "Salis Nizar Qomaruzaman <hr>";
        $i++;
    }

    $i = 0;
    do{ //minimal dijalankan sekali baru ke pengulangan
        echo "<small>Salis Nizar Qomaruzaman</small> <br>";
        $i++;
    }while($i < 5);
?>