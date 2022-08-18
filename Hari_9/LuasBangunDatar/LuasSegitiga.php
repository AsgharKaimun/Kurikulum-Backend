<?php

// MENGHITUNG LUAS PERSEGI PANJANG
echo "Menghitung Luas Segitiga" . PHP_EOL;

echo "Alas : ";
$Alas = trim(fgets(STDIN));

echo "Tinggi : ";
$Tinggi = trim(fgets(STDIN));

$LuasSegitiga = (1/2 * (int)$Alas) * (int)$Tinggi; // L = 1/2 Alas x Tinggi

echo "Luas Segitiga = $LuasSegitiga" . PHP_EOL;

?>