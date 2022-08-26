<?php

$Filter = "ucwords";
$Lower = "strtolower";

$Arrow = fn($Unknown) => "He is A " . $Filter($Lower($Unknown)).PHP_EOL;
echo $Arrow("Former Janissary");

?>
