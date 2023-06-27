<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">

        <!-- Contoh pengulangan yang kurang efektif dlm membuat tabel di html -->

        <tr>
            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
            <td>1.4</td>
            <td>1.5</td>
        </tr>
        <tr>
            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
            <td>1.4</td>
            <td>1.5</td>
        </tr>
        <tr>
            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
            <td>1.4</td>
            <td>1.5</td>
        </tr>
        
        <!-- Contoh pengulangan yang lebih efektif -->

        <?php
            for ($i=1; $i <= 3 ; $i++) { 
                echo "<tr>";
                    for ($j=1; $j <= 5 ; $j++) { 
                        # code...
                        echo "<td>$i,$j</td>";
                    }
                echo "</tr>";
            }
        ?>

        <!-- Atau kita bisa mengeluarkan tag htmlnya -->

        <?php for($i=1; $i<= 5; $i++){ ?>
            <?php if ($i % 2 == 1) : ?>
                <tr style="background-color : grey;">
                <?php else : ?>
                    <tr>
                        <?php endif ;?>
                            <?php for ($j=1; $j <= 5 ; $j++) { ?>
                                    <td>
                                        <?php echo "$i,$j"; ?>
                                    </td>
                                <?php } ?> 
                    </tr>
                
        <?php } ?>

        <!-- kita juga bisa mengganti kurung kurawal pada for, pembuka = : dan penutupnya = endfor -->

        <?php for($i=1; $i<= 3; $i++):?>
            <tr>
                <?php for ($j=1; $j <= 5 ; $j++) : ?>
                        <td>
                            <?php echo "$i,$j"; ?>
                        </td>
                    <?php endfor ?> 
            </tr>
        <?php endfor ?>


    </table>
    
</body>
</html>