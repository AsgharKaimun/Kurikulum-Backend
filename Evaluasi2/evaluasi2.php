<?php

echo "----SOAL 1----" .PHP_EOL;

$arrayValues = [
    "1st" => 5,
    "2nd" => 10,
    "3rd" => 15,
];

echo implode(" ", array_values($arrayValues));

echo "\n\n";

echo "----SOAL 2----" .PHP_EOL;

require 'VariableScope.php';

echo "----SOAL 3----" .PHP_EOL;

echo substr("EVALUASI PEKAN KE 2",0,8). PHP_EOL;// Indeks 0(E), Length 8(EVALUASI)
echo substr("EVALUASI PEKAN KE 2",9,5). PHP_EOL;// Indeks 9(P), Length 5(PEKAN)
echo substr("EVALUASI PEKAN KE 2",3,4). PHP_EOL;// Indeks 3(L), Length 4(LUAS)

echo "\n\n";

echo "----SOAL 4----" .PHP_EOL;

function ReturnValue($x, $y) {
    return $x*$y;

};

echo ReturnValue(5,5);

echo "\n\n";

echo "----SOAL 5----" .PHP_EOL;

$Perulangan = [
    "1st" => 5,
    "2nd" => 10,
    "3rd" => 15,
];

foreach($Perulangan as $Key => $Value) {
    echo "Urutan ke : $Key = $Value" .PHP_EOL;
}

echo "\n\n";


