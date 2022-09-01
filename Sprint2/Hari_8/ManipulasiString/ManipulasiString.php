<?php

// MENGHITUNG JUMLAH KARAKTER TERMASUK SPACE
echo strlen("Jumlah Karakter") . PHP_EOL;

// MENGHITUNG JUMLAH KATA DALAM STRING
echo str_word_count("Menghitung Jumlah Kata Dalam String") . PHP_EOL;

// MENGUBAH NUMBER MENJADI STRING
$a = 1997;
var_dump($a) . PHP_EOL;
var_dump((string)$a);

// PENGGUNAAN CURLY BRACE
$a = 7;

echo " {$a}th Grade" . PHP_EOL;

// MENGUBAH HURUF BESAR KE HURUF KECIL
echo strtolower("WAKARIMASEN") . PHP_EOL;

// MENGUBAH HURUF KECIL KE HURUF BESAR
echo strtoupper("wakarimasen") . PHP_EOL;

// MENGUBAH KARAKTER AWAL KATA MENJADI HURUF BESAR(KAPITAL)
echo ucwords("awal kata menjadi huruf besar") . PHP_EOL;

// PENGGUNAAN number_format
$a = 99.9;
$formatted = number_format($a);
$formatted2 = number_format($a,2);
echo($formatted) . PHP_EOL;
echo($formatted2) . PHP_EOL;


// MERANGKAI STRING
$Kata = "Gear";
$Kata2 = "Fourth";
echo $Kata . $Kata2;
echo "\n";

// RANGKAIAN PENUGASAN
$teks = "Gear";
$teks2 = "Fourth";
$teks .= $teks2;
echo $teks;
echo "\n";

// MENGAMBIL SEBAGIAN NILAI DARI STRING
// Jika Index +Positif Maka Dari Depan dan Jika -Negative dari Belakang

// substr(String , Index , Panjang Karakter )
echo substr("Wakarimasen",0,5). PHP_EOL;// Index(0), Panjang Karakter(5)
echo substr("Wakarimasen",6,6). PHP_EOL;// Index(6), Panjang Karakter(6)
echo substr("Wakarimasen",0,-1). PHP_EOL;// Index(0), Panjang Karakter(-1)
echo substr("Wakarimasen",-10,-2). PHP_EOL;// Index(-10), Panjang Karakter(-2)
echo "\n";
// Mengulang Value Sesuai Dengan Yang Kita Inginkan

// str_repeat(string,repeat)
echo str_repeat("Value \n", 5) .PHP_EOL;

