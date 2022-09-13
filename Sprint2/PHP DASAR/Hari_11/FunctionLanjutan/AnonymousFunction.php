<?php

$Anonym = function(string $No) {

    echo "Ke-$No" .PHP_EOL;
};

$Anonym("Delapan");

// --------------------------------------------------

$Filter = "ucwords";
$Lower = "strtolower";

$Anonymous = function($Name,$Stats)use($Filter,$Lower){
    $First = $Filter($Lower($Stats));
    $Second = $Filter($Lower($Name));
    echo "He Is A '$First $Second'" .PHP_EOL;
};

$Anonymous("Janissary","Former")
?>