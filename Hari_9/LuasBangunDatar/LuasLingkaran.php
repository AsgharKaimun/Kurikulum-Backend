<?php

// MENGHITUNG LUAS LINGKARAN
echo "Menghitung Luas Lingkaran" . PHP_EOL;

echo "Panjang Jarijari : ";
$Jarijari = trim(fgets(STDIN));

// 𝛑(pi) = 3.14 = 22/7

$LuasLingkaran = 22/7 * (int)$Jarijari * (int)$Jarijari; // L = 𝛑(pi) x r x r
// $LuasLingkaran = 3.14 * (int)$Jarijari * (int)$Jarijari; // L = 𝛑(pi) x r x r

echo "Luas Lingkaran = $LuasLingkaran" . PHP_EOL;

?>  