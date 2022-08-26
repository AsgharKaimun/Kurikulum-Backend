<?php

function removeSantri($Data) {

    global $dataSantri;

    switch(true){

        case $Data > 0 && $Data <= count($dataSantri) :
            while($Data < count($dataSantri)){
                $dataSantri[$Data] = $dataSantri[$Data + 1];
                $Data++;
            }
            unset($dataSantri[count($dataSantri)]);
            break;
        default :
            echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n" .PHP_EOL;
            return true;
        }
        
        
    echo "\n >>> DATA BERHASIL DIHAPUS <<< \n" .PHP_EOL;
    return viewShowSantri();
}

?>