<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/DataSantri.php";

require_once __DIR__ . "/../Controller/AddSantri.php";
require_once __DIR__ . "/../Controller/ShowSantri.php";

function viewAddSantri() {
    
    
    do{
        
        echo "TAMBAH DATA" .PHP_EOL;
        echo "===== MENU =====" .PHP_EOL;
        echo "B. KEMBALI KE MENU" .PHP_EOL;
        echo "E. KELUAR APLIKASI" .PHP_EOL;
        echo "Ketik B Untuk Kembali Ke Menu, E Untuk Keluar Aplikasi" .PHP_EOL;
    
        $santri = strtoupper(input("MASUKKAN DATA"));

        switch($santri){
            case "B" :
                echo "\n >>> BATAL MENAMBAH DATA <<< \n" .PHP_EOL;
                return true;
            case "E" :
                Keluar();
                break;
            default :
                addSantri($santri);
                return true;
        }
    } while(true);
}

?>
