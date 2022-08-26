<?php

function input(string $info) {

    //
    echo "$info : ";

    // Input Menu, Create, Update, Delete
    $result = trim(fgets(STDIN));

    // Kalau Tidak Pakai Return Bakal Error
    return trim($result);
}

function Keluar(){

    while(true){

        $exit = strtoupper(input("YAKIN INGIN KELUAR ? (Y/N)"));

        switch($exit){

            case "Y" :
                echo "======= SAMPAI JUMPA LAGI =======" . PHP_EOL;
                exit;
            case "N" :
                return true;
            default :
                echo "\n <<< KETIK Y/N >>> \n" .PHP_EOL;
                break;
        }
    }
}

?>