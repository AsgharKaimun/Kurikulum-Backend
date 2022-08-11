<?php   

// 
$Nested = 50;
if ($Nested <= 50){ // Kondisi 1
    echo "Pertama" . PHP_EOL; // Akan Ditampilkan Jika Kondisi 1 True
    if($Nested == 25 + 25){ // Kondisi 2
        echo "Kedua" . PHP_EOL; // Akan Ditampilkan Jika Kondisi Keduanya(1 dan 2) True
    }
}