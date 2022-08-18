<?php

// Operator Logika
$a = 20;
$b = 18;

// Operator Not
echo "----!----" . "\n";
// True Jika Nilai $a Salah
var_dump($a != 10);
// False Jika Nilai $a Benar
var_dump($a != 20);

echo "\n";

// Operator And
echo "----&&----" . "\n";
// True Jika Keduanya True
var_dump($a > 10 && $b ==18);
// False Jika Salah Satunya True
var_dump($a < 10 && $b >=18);
// False Jika Keduanya False
var_dump($a !=20 || $b != 18);

echo "\n";

// Operator Or
echo "----||----" . "\n";
// True Jika Keduanya True
var_dump($a != 0 || $b < 100);
// True Jika Salah Satunya True
var_dump($a > 18 || $b == 0 );
// False Jika Keduanya False
var_dump($a !=20 || $b != 18);

echo "\n";

// Operator Xor
echo "----xor----" . "\n";
// True Jika Salah Satunya True
var_dump($a > 18 xor $b == 0 );
// False Jika Keduanya True
var_dump($a != 0 xor $b < 100);
// False Jika Keduanya False
var_dump($a !=20 xor $b != 18);

echo "\n";

?>