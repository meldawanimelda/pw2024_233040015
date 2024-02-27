<?php

function number($angka){
    $jumlah = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $jumlah++ . " ";
        }
        echo "<br>";
    }
}

echo number(5);
