<?php

require_once "../Model/Data.php";


function Add($Tambah){
    global $Data;

    $i = count($Data) + 1;
    $Data[$i] = $Tambah;

    echo "DATA ADDED!" .PHP_EOL;
}
?>