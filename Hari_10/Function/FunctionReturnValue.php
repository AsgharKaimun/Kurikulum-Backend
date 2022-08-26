<?php

function ReturnValue(int $Flip, int $Swap) {

    return $Flip + $Swap;
}

echo ReturnValue(7,14) .PHP_EOL;

function Returning (float $Skip, float $Next) {

    $Result = $Skip * $Next;
    return $Result;
}

echo Returning(0.06, 0.9) .PHP_EOL;

?>