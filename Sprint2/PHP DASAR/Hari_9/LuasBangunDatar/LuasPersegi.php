<?php

//MENGHITUNG LUAS PERSEGI
echo "Menghitung Luas Persegi" . PHP_EOL;

echo "Panjang Sisi : ";
$PanjangSisi = trim(fgets(STDIN));

$LuasPersegi = (int)$PanjangSisi ** 2; // L = Sisi x Sisi

echo "Luas Persegi = $LuasPersegi" . PHP_EOL;

?>