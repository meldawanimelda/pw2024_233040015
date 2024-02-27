<?php

// menghitung luas lingkaran
// jari-jari =10, 

function hitungLuaslingkaran($r) {
    $rumusL = 3.14*$r*$r;

    return $rumusL;
}

echo "Luas lingkaran = " . hitungLuaslingkaran(10);
echo "<hr>";

function hitungKelilinglingkaran($r) {
    $rumusK = 2*3.14*$r;

    return $rumusK;
}

echo "Keliling Lingkaran = " . hitungKelilinglingkaran(20);
