<?php
// String => Menyipan Beberapa Karakter

// String Biasa
$Domisili = "Palu \n"; 
echo "Domisili : $Domisili";
var_dump($Domisili);

// Langsung Eksekusi / Perintah Untuk Menampilkan Tulisan
echo "Domisili : Palu" . PHP_EOL;

// Heredoc - Bisa Membuat Baris Baru
$Domisili = <<<ALAMAT
Nama - Faturrahman
Tinggi Badan - 167 cm
Kemampuan - 83.5
Country - Indonesia
Domisili - Palu
ALAMAT;

echo $Domisili . "\n";

?>