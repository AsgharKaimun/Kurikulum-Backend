<?php

// SOAL 1

/*
Operator (!=) akan menghasilkan true apabila input memiliki nilai yang berbeda dengan tipe data yg sama maupun berbeda
              dan akan mengasilkan false apabila memiliki nilai yang sama dengan tipe data yg sama maupun berbeda
Operator (!==) hanya akan menghasilkan false apabila input memiliki nilai dan tipe data yg sama      
*/  
echo "---- SOAL 1 ----" .PHP_EOL;

// Operator (!=)
echo "Operator (!=)" .PHP_EOL;

// Nilai Sama Tapi Tipe Data Berbeda
if(1 != "1"){
    echo "true";
} else {
    echo "false";
}
echo "\n";

// Nilai Dan Tipe Data Sama
if("contoh" != "contoh"){
    echo "true";
} else {
    echo "false";
}
echo "\n";

// Nilai Dan Tipe Data Berbeda
if(1 != "9"){
    echo "true";
} else {
    echo "false";
}
echo "\n";

// Nilai Berbeda Tapi Tipe Data Sama
if(1 != 7){
    echo "true";
} else {
    echo "false";
}
echo "\n \n";

//Operator (!==)
echo "Operator (!==)" .PHP_EOL;

// Nilai Sama Tapi Tipe Data Berbeda
if(1 !== "1"){
    echo "true";
} else {
    echo "false";
}
echo "\n";

// Nilai Dan Tipe Data Sama
if("contoh" !== "contoh"){
    echo "true";
} else {
    echo "false";
}
echo "\n";

// Nilai Dan Tipe Data Berbeda
if(1 !== "9"){
    echo "true";
} else {
    echo "false";
}
echo "\n";

// Nilai Berbeda Tapi Tipe Data Sama
if(1 !== 7){
    echo "true";
} else {
    echo "false";
}
echo "\n \n";

// SOAL 2
echo "----SOAL 2----" .PHP_EOL;

$a = 7;
$b = 9;

if($a >= 0 && $a < $b){
    echo "Hello World!";
}
echo "\n \n";

// SOAL 3
echo "----SOAL 3---" .PHP_EOL;

$Divisi = [
    1 => "Sulaiman",
    2 => "Fandy",
    3 => "Dedy",
    4 => "Ferry",
    "Makanan Favorit" => [
        "1" => "Pisang Goreng",
        "2" => "Nasi Goreng",
        "3" => "Semua Jenis Roti",
        "Minuman Favorit" => [
            "1st" => "Tujuh Kurma",
            "2nd" => "MILO",
            "3rd" => "Aer Putih"
        ]       
    ]
];

var_dump($Divisi);
echo $Divisi[1];
echo "\n \n";

// SOAL 4
echo "----SOAL 4----" .PHP_EOL;

$UangBudi = 50000;
$Jajan = 20000;
$DiberiUang = 5000;

//Uang Budi
$UangBudi -= $Jajan;
$UangBudi += $DiberiUang;

echo $UangBudi;
echo "\n \n";

// SOAL 5
echo "----SOAL 5----" .PHP_EOL;

$a = 7;
$b = 3;

echo $a ** $b;
echo "\n";

?>