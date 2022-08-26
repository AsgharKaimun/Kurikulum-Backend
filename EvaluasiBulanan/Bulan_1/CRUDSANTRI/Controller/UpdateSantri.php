<?php

function UpSantri(int $Num, string $Name){
    global $dataSantri;

    switch(true){

        case $Num > 0 && $Num <= count($dataSantri) :
            $dataSantri[$Num] = $Name;
            break;    
        default :
            echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n" .PHP_EOL;
            return true;
    }

    echo "\n >>> DATA TELAH DIPERBARUI <<< \n" .PHP_EOL;
}


?>