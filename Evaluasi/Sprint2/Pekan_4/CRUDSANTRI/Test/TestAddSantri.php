<?php

require_once "../Model/DataSantri.php";
require_once "../Controller/AddSantri.php";


addSantri("Bambang");
addSantri("Caca");
addSantri("Koko");

// var_dump($dataSantri) .PHP_EOL;
echo implode("\n", $dataSantri) .PHP_EOL;


?>