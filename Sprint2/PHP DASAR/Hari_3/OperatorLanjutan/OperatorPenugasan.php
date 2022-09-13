<?php

$Infantry = 160; // Per Unit
$Cavalry = 54;
$GeneralBodyguard = 62;

$Banner = 0; // Army

$Banner += $Infantry; // 0 + 160 => Infantry Join The Army
$Banner *= 10; // 10 Unit x 160 = 1600
$Banner += $Cavalry * 2; // 1600 + 54 x 2 = 1708
$Banner /= 2; // 1708/2 = 854 remain => Some Other Left The Battlefield
$Banner += $GeneralBodyguard; // 854 + 62 = 916 => General Lead The Army
$Banner -= 700; // loss -700 man => 916 - 700 = 216 remain

echo $Banner . PHP_EOL;

?>
