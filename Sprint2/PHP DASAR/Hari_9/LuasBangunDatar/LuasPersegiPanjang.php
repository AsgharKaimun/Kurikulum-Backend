<?php

// MENGHITUNG LUAS PERSEGI PANJANG
echo "Menghitung Luas Persegi Panjang" . PHP_EOL;

echo "Panjang Sisi : ";
$Panjang = trim(fgets(STDIN));

echo "Lebar Sisi : ";
$Lebar = trim(fgets(STDIN));

$LuasPersegiPanjang = (int)$Panjang * (int)$Lebar; // L = Panjang x Lebar

echo "Luas Persegi Panjang = $LuasPersegiPanjang" . PHP_EOL;

?>