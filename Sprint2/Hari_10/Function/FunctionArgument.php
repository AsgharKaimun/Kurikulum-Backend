<?php

function Argument(string $No) {

    echo "Ke-$No" .PHP_EOL;
}

Argument("Satu");
Argument("Dua");
Argument("Tiga");


$Array = [ 9, 9, 9, 9];

function Pangkat(array $Num){

    $Hasil = 1;

    foreach($Num as $Value){

        $Hasil *= $Value;

    }
     echo "9 ** 4 = " . implode(" * ", $Num) . " = $Hasil" .PHP_EOL;
}

Pangkat($Array);

?>