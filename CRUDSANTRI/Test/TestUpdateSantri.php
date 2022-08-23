<?php

require_once "../Model/DataSantri.php";
require_once "../Controller/ShowSantri.php";
require_once "../Controller/AddSantri.php";
require_once "../Controller/UpdateSantri.php";

addSantri("Luffy"); // Data 1
addSantri("Zorro"); // Data 2
addSantri("Chopper"); // Data 3
addSantri("Brok"); // Data 4
addSantri("Franky"); // Data 5

UpSantri(3,"Nico Robin");
showSantri();

?>