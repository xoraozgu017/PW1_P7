<?php
    $tinggi = 4;
    $i = 1;

    do{
        $j = 1;
        do{
            echo "* ";
            $j++;
        }while ($j <= $i);
        echo "\n";
        $i++;
    }while ($i <= $tinggi);
?>