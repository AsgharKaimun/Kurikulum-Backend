<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/DataSantri.php";

require_once __DIR__ . "/../Controller/UpdateSantri.php";
require_once __DIR__ . "/../Controller/ShowSantri.php";

function viewUpSantri(){

    global $dataSantri;
    
    do{
        
        echo "PERBARUI DATA" .PHP_EOL;
        showSantri();
        echo "===== MENU =====" .PHP_EOL;
        echo "B. KEMBALI KE MENU" .PHP_EOL;
        echo "E. KELUAR APLIKASI" .PHP_EOL;
        echo "Ketik B Untuk Kembali Ke Menu, E Untuk Keluar Aplikasi" .PHP_EOL;
    
        $pilihan = strtoupper(input("PERBARUI DATA KE"));
    
    
        switch(true){
            case $pilihan == "B" :
                echo "\n >>> BATAL MEMPERBARUI DATA <<< \n" .PHP_EOL;
                return true;
            case $pilihan == "E" :
                Keluar();
                break;
            case $pilihan > 0 && $pilihan <= count($dataSantri) :
                ViewUpdate($pilihan);
                break;
            default :
                echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n" .PHP_EOL;
                
        }
    } while(true);
}

function ViewUpdate(int $Number){

    global $dataSantri;

    do{
        
        echo "PERBARUI DATA" .PHP_EOL;
        echo "$Number.$dataSantri[$Number]" .PHP_EOL;
        echo "===== MENU =====" .PHP_EOL;
        echo "B. BATAL MEMPERBARUI" .PHP_EOL;
        echo "E. KELUAR APLIKASI" .PHP_EOL;
        echo "Ketik B Untuk Membatalkan, E Untuk Keluar Aplikasi" .PHP_EOL;
    
        $pilihan = strtoupper(input("MASUKKAN DATA"));
        
            switch($pilihan){
                case "B" :
                    echo "\n >>> BATAL MEMASUKKAN DATA <<< \n" .PHP_EOL;
                    return true;
                case "E" :
                    Keluar();
                    break;
                default :
                    UpSantri($Number,$pilihan);
                    return viewShowSantri();
    
            }
    } while(true);
}



?>