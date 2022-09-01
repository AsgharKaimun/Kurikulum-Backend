<?php

$M = 1000;
// If
if ($M == 1000){
    echo "Great!" . "\n"; // Akan Ditmpilkan Jika Kondisinya True
}

// If...Else
if ($M >= 2000){
    echo "Great!" . "\n"; // Akan Ditmpilkan Jika Kondisinya True
} else {
    echo "Maybe Not This Time" . PHP_EOL; // Akan Ditampikan Kika Kondsi dari (if) False
}

// If...Else if...Else
if ($M == 5000){
    echo "Great!" .PHP_EOL; // Akan Ditmpilkan Jika Kondisinya True
} elseif ($M == 1000){
    echo "Try Hard" . PHP_EOL; // Akan Ditampilkan Jika Kondisinya True dan Kondisi dari (if) False
} else {
    echo "Maybe Not This Time" . PHP_EOL; // Akan Ditampilkan Jika Kondisi Keduanya (if dan elseif) false
}

?>