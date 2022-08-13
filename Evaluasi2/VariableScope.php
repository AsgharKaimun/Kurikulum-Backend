<?php

$a = 7;
$b = 9;

function Pertambahan($nama) {
    global$a; 
    global$b;
    $hasil = $a + $b;
    echo "Nama Saya : $nama" .PHP_EOL;
    echo "Hasil Dari Pertambahan : $hasil" .PHP_EOL;
}
