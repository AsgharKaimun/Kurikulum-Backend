<?php

// Cara 1 - Sederhana
echo "Masukkan Peran : ";
$Cara1 = trim(fgets(STDIN));
$Case = Ucwords($Cara1) == "Bodyguard" ? "Benar" : "Salah" .PHP_EOL;
echo "$Case" . "\n\n";

// Cara 2 - Menggunakan Operator Logika
echo "Masukkan Peran : ";
$Cara2 = trim(fgets(STDIN));
echo "$Cara2 Memiliki Aura : ";
$Aura = trim(fgets(STDIN));
$Tim = $Cara2 == "Bodyguard" && $Aura == "Good" ? "Bodyguard Adalah Villager" : "Unknown";
echo $Tim . "\n\n";

// Cara 3 - Ada 3 Kondisi
echo "Masukkan Peran : ";
$Cara3 = trim(fgets(STDIN));
echo "$Cara3 Memiliki Aura : ";
$Aura2 = trim(fgets(STDIN));
$Tim2 = $Cara3 == "Corruptor" && $Aura2 == "Good" ? "Corruptor Adalah Villager" :
 ($Cara3 == "Corruptor" && $Aura2 == "Unknown" ? "Corruptor Adalah Solo Player" :
 ($Cara3 == "Corruptor" && $Aura2 == "Evil" ? "Corruptor Adalah Serigala" :
 "Tidak Berada Dalam Tim"));
echo $Tim2 .PHP_EOL;

?>