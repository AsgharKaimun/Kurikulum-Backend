<?php

function MyFunction() {
    echo "This is Function" .PHP_EOL;
}

$Var = "MyFunction";

$Var(); // Untuk Menjalankan function MyFunction


function VarFn($Country,$Filter){
    echo $Filter($Country).PHP_EOL;
}

VarFn("palestine","strtoupper")

?>