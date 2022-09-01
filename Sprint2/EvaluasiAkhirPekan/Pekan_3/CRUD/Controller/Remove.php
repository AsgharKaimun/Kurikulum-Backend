<?php

require_once "../Model/Data.php";

function Remove($Num){
    global $Data;

    if($Num < count($Data)){
        while($Num < count($Data)){
    
            $Data[$Num] = $Data[$Num + 1];
            $Num++;
    
        }
        unset($Data[count($Data)]);
    } else { 
        echo "DATA TIDAK DITEMUKAN" .PHP_EOL;
        return true;
    }

    echo "DATA HAS BEED DELETED!" .PHP_EOL;
}

?>