<?php

$TWD = ["Rick", "Carl", "Judith", "Clementine"];// Index[0, 1, 2, 3]
$SOD = [
    "Powerhouse" => "Marcus",
    "Cardio Run" => "Ed",
    "EagleEye" => "Maya",
];

// MENGUBAH ARRAY KE STRING
echo implode(", ", $TWD) .PHP_EOL;
echo "\n";
echo implode("\n", $SOD) .PHP_EOL;
echo "\n";

// MENGHITUNG JUMLAH ARRAY
echo count($TWD) .PHP_EOL;
echo count($SOD) .PHP_EOL;
echo "\n";

// MENGUBAH DATA(AKAN MENIMPA DATA)
$TWD[1] = "Maya";
echo implode(", ", $TWD) .PHP_EOL;
echo "\n";
$SOD["Cardio Run"] = "Hoffman";
echo implode("\n", $SOD) .PHP_EOL;
echo "\n";

//MELIHAT DATA ARRAY
var_dump($TWD) .PHP_EOL;
echo "\n";
var_dump($SOD) .PHP_EOL;
echo "\n";

// MENGHAPUS DATA TUNGGAL
unset($TWD[3]);
echo implode(", ", $TWD) .PHP_EOL;
echo "\n";
unset($SOD["EagleEye"]);
echo implode("\n", $SOD) .PHP_EOL;
echo "\n";

// MENAMBAH DATA
$TWD[3] = "Kenny"; 
echo implode(", ", $TWD) .PHP_EOL;
echo "\n";
$SOD["Operator"] = "Lily";
echo implode("\n", $SOD) .PHP_EOL;
echo "\n";

// MENGGABUNGKAN ARRAY
echo implode(", ", array_merge($TWD,$SOD)) .PHP_EOL;
echo "\n";

// MENAMPILKAN ARRAY DENGAN PERULANGAN FOREACH
foreach($TWD as $twd) {
    echo "Survivor $twd \n";
}

echo "\n";

foreach($SOD as $key => $value) {
    echo "The $key : $value \n";
}

echo "\n";

// MENGAMBIL NILAI MAKSIMAL(MAX) DAN MINIMAL(MIN)
$MinMax = [345,324,567,897];
echo min($MinMax) .PHP_EOL;
echo max($MinMax) .PHP_EOL;

?>