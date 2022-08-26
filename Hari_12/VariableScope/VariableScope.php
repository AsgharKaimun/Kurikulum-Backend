<?php

//Variabel Global
$Set = "Humilated";

function VarGlo(){
    
    global $Set; // Diluar Blok Kode
    echo "Being $Set".PHP_EOL;

}

VarGlo();

//Variabel Lokal
function VarLoc(){

    $Set = "Humilated"; // Didalam Blok Kode
    echo "$Set By Legend".PHP_EOL;
}

VarLoc();

//Variabel Static
function VarStat(){

    static $Set = 0.05;
    // $Set = 0.05;
    echo "$Set + $Set = ";
    return $Set += $Set; // Value Akhir Tetap Tersimpan ke static $Set
}

echo VarStat(). PHP_EOL;
echo VarStat(). PHP_EOL;
echo VarStat(). PHP_EOL;

?>