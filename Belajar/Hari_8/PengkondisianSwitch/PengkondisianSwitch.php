<?php

$WWO = "AlphaWerewolf";

switch ($WWO){
    case "Gunner" :
        echo "Nope, Gunner Is A Villager";
        break;
    case "Seer" :
        echo "NO!, Seer is A Villager";
        break;
    case "AlphaWerewolf" :
        echo "There you go Wolvies!";
        break;
    default : 
        echo "None of Them Are Alpha!";

} 

// echo "\n";


// Menggunakan Operator
$Cracker = 77;
$HolyCrystal = 0;

switch ($Cracker && $HolyCrystal){
    case $Cracker != 77 && $HolyCrystal > $Cracker :
        echo "Amazing!" . PHP_EOL;
        break;
    case true :
        echo "GG Well Played" . PHP_EOL;
        break;
    case $Cracker != 77 || $HolyCrystal < $Cracker :
        echo "Poor";
        break;
    default : 
        echo "Traitor!";
} 
