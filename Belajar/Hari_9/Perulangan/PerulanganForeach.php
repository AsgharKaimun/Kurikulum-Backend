<?php

$TWD = ["Rick", "Carl", "Judith", "Clementine"];// Index[0, 1, 2, 3]
$SOD = [
    "Powerhouse" => "Marcus",
    "Cardio Run" => "Ed",
    "EagleEye" => "Maya",
];


// PERULANGAN KHUSUS ARRAY
foreach($TWD as $twd) {
    echo "Survivor $twd \n";
}

echo "\n";

foreach($SOD as $key => $value) {
    echo "The $key : $value \n";
}








?>