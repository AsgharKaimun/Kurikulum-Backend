<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/DataSantri.php";

require_once __DIR__ . "/../Controller/RemoveSantri.php";
require_once __DIR__ . "/../Controller/ShowSantri.php";

function viewRemoveSantri() {
    
    
    do{
        
        echo "HAPUS DATA" .PHP_EOL;
        showSantri();
        echo "===== MENU =====" .PHP_EOL;
        echo "B. KEMBALI KE MENU" .PHP_EOL;
        echo "E. KELUAR APLIKASI" .PHP_EOL;
        echo "Ketik B Untuk Kembali Ke Menu, E Untuk Keluar Aplikasi" .PHP_EOL;
    
        $pilihan = strtoupper(input("HAPUS DATA KE"));

        switch($pilihan){
            case "B" :
                echo "\n >>> BATAL HAPUS DATA <<< \n" .PHP_EOL;
                return true;
            case "E" :
                Keluar();
                break;
            default :
                removeSantri($pilihan);
                
        }
    } while(true);
}



?>