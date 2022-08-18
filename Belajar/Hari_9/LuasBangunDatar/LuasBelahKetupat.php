<?php

// MENGHITUNG LUAS BELAH KETUPAT
echo "Menghitung Luas Belah Ketupat" . PHP_EOL;

echo "Diagonal 1 : ";
$diagonal1 = trim(fgets(STDIN));

echo "Diagonal 2 : ";
$diagonal2 = trim(fgets(STDIN));

// 0.5 => 1/2 / 50%
// 0.4 => 40%
// 0.9 => 90%
$LuasBelahKetupat = ((int)$diagram1 * (int)$diagram2) / 2; // L = (d1 x d2) / 2

echo "Luas Belah Ketupat = $LuasBelahKetupat" . PHP_EOL;

?>