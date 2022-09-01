<?php

// MENGHITUNG LUAS JAJAR GENJANG
echo "Menghitung Luas Jajar Genjang" . PHP_EOL;

echo "Alas : ";
$Alas = trim(fgets(STDIN));

echo "Tinggi : ";
$Tinggi = trim(fgets(STDIN));

$LuasJajarGenjang = (int)$Alas * (int)$Tinggi; // L = Alas x Tinggi

echo "Luas Jajar Genjang = $LuasJajarGenjang" . PHP_EOL;

?>