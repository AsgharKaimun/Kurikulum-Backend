<?php

function addSantri(string $tambahSantri) {
    
    global $dataSantri;
    
    $number = count($dataSantri) + 1;
    
    $dataSantri[$number] = $tambahSantri;

    echo "\n >>> DATA BERHASIL DITAMBAHKAN <<< \n" .PHP_EOL;
}



?>