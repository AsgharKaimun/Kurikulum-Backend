<?php

function Rec(int $g){
    
    $Total = 0;
    for($i = 1; $i <= $g; $i++){
        
        echo "$Total + $i".PHP_EOL;
        $Total += $i;
        
    }

    return $Total;
    
}
echo Rec(10).PHP_EOL;

function RecIf(int $Set){

    if($Set > 50){
        return 1;
    } else {
        return $Set + Recif($Set + 1);
    }
}

echo Recif(10).PHP_EOL;
?>