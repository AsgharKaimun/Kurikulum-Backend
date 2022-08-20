<?php

echo "==== SOAL 1 ====" .PHP_EOL;

$HasilBelajar = [
    "Bahasa English" => 70,
    "Bahasa Arab" => 100,
    "Bahasa Indonesia" => 90,
    "Bahasa Rusia" => 50,
    "Bahasa Thailand" => 60,
    
];

function rataRata(){
    
    global $HasilBelajar;
    foreach($HasilBelajar as $Key => $Value){
        echo "$Key => $Value" .PHP_EOL; 

    }
    echo "\n";
    echo "Nilai Tertinggi Adalah Bahas Arab : " . max($HasilBelajar) .PHP_EOL;
    echo "Nilai Terendah Adalah Bahas Rusia : " . min($HasilBelajar);


    
}

rataRata();

echo "\n\n";

echo "==== SOAL 4 ====" .PHP_EOL;

$nilaiRata = ['a','a','a','a','b','b','c','d','d','d','d','d'];

sort($nilaiRata);
$n = 0;



?>