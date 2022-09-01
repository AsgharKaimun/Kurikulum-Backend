<?php

require_once "../Model/Data.php";


function Show(){
    global $Data;
    
    echo "====DATA LIST====" .PHP_EOL;

    foreach($Data as $Key => $Value){
        echo "$Key. $Value" .PHP_EOL;
    }
}



?>