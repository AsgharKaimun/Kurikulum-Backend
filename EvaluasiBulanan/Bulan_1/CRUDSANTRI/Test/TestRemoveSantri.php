<?php

require_once "../Model/DataSantri.php";
require_once "../Controller/ShowSantri.php";
require_once "../Controller/AddSantri.php";
require_once "../Controller/RemoveSantri.php";

addSantri("Luffy"); // Data 1
addSantri("Zorro"); // Data 2
addSantri("Chopper"); // Data 3
addSantri("Brok"); // Data 4l
addSantri("Franky"); // Data 5

// Menghapus Data Yang Dipilih
// True
removeSantri(1);
// False
// RemoveSantri(7);

// Cek True / False 
// var_dump(removeSantri(4));

//Jalankan Program Untuk Melihat Yang Sudah Dihapus
showSantri();

?>