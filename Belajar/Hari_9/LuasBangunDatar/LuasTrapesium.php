<?php

// MENGHITUNG LUAS TRAPESIUM
echo "Menghitung Luas Trapesium" . PHP_EOL;

echo "Sisi Panjang : ";
$SisiPanjang = trim(fgets(STDIN));

echo "Sisi Pendek : ";
$SisiPendek = trim(fgets(STDIN));

echo "Tinggi : ";
$Tinggi = trim(fgets(STDIN));

$LuasTrapesium = 1/2 * ((int)$SisiPanjang + (int)$SisiPendek) * (int)$Tinggi; // L = 1/2 x Jumlah Sisi Sejajar x Tinggi

echo "Luas Trapesium = $LuasTrapesium" . PHP_EOL;

?>