<?php

// Cara 1
define("AWAKENING", 4.5); // [AWAKENING => KEY - STRING/UPPER_CASE] [4.5 => VALUE - STRING/NUMBER]
echo "Awakening Version : " . AWAKENING . "\n";

define("AWAKEN", "SNAKE_MAN"); // [AWAKEN => KEY - STRING/UPPER_CASE] [SNAKE_MAN => VALUE - STRING/NUMBER]
echo "Awakening Name : " . AWAKEN . "\n";

// Cara 2 - Umum
const AWAKENING_MODE = 4; // [AWAKENING_MODE => KEY - STRING/UPPER_CASE] [4 => VALUE - STRING/NUMBER]
echo "Awakening Version : " . AWAKENING_MODE . "\n";

const AWAKENING_NAME = "BOUND_MAN"; // [AWAKENING_NAME => KEY - STRING/UPPER_CASE] [BOUND_MAN => VALUE - STRING/NUMBER]
echo "Awakening Name : " . AWAKENING_NAME . "\n";

?>

