<?php

$SOD = [
    "Powerhouse" => "Marcus",
    "Cardio Run" => "Ed",
    "EagleEye" => "Maya",
    "Operator" => "Lily",
    "The Army" => "Erik Tan",
    "The Goverment" => "Nathalia"
];

// MENGGANTI SEMUA KEY KE HURUF BESAR
var_dump(array_change_key_case($SOD,CASE_UPPER));
echo "\n\n"; 
// MENGGANTI SEMUA KEY KE HURUF KECIL
var_dump(array_change_key_case($SOD,CASE_LOWER)); 
echo "\n\n";


?>
