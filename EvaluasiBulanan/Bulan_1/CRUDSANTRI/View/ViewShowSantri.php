<?php

// require_once __DIR__ . "/../Model/DataSantri.php";
// require_once __DIR__ . "/../Helper/Input.php";

// require_once __DIR__ . "/../Controller/ShowSantri.php";
// require_once __DIR__ . "/../Controller/AddSantri.php";
// require_once __DIR__ . "/../Controller/RemoveSantri.php";
// require_once __DIR__ . "/../Controller/UpdateSantri.php";

// require_once __DIR__ . "/../View/ViewAddSantri.php";
// require_once __DIR__ . "/../View/ViewRemoveSantri.php";
// require_once __DIR__ . "/../View/ViewUpdateSantri.php";


function viewShowSantri() {

    
    do {

        $t = time();
        echo date("l, F-j-Y, G:i:s" ,$t) ."\n";
        
        showSantri();

        echo "===== MENU =====" .PHP_EOL;
        echo "1. TAMBAH DATA" .PHP_EOL;
        echo "2. PERBARUI DATA" .PHP_EOL;
        echo "3. HAPUS DATA" .PHP_EOL;
        echo "4. KELUAR APLIKASI" .PHP_EOL;
        
        $pilihan = input("PILIH NO KE");
        
        switch($pilihan){
            case "1" :
                viewAddSantri();
                break;
            case "2" :
                viewUpSantri();
                break;
            case "3" :
                viewRemoveSantri();
                break;
            case "4" :
                Keluar();
                break;
            default :
                echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n" .PHP_EOL;
        }
    } while(true);
}

?>
