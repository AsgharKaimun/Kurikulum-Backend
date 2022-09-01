<?php
class bangunDatar {
    // Properties
    private $Alas;
    private $Tinggi;
    private $Luas;
    private $Keliling;
    private $Sisi;

    // Methods
    function __construct(int $Alas,int $Tinggi,int $Sisi) {
        $this->Alas = $Alas;
        $this->Tinggi = $Tinggi;
        $this->Sisi = $Sisi;
        echo "Menghitung Luas Dan Keliling Segitiga" .PHP_EOL;
    }
    function Segitiga() {
        $this->Luas = $this->Alas * $this->Tinggi / 2;
        $this->Keliling = $this->Alas + (2 * $this->Sisi);
    }
    function __destruct(){
        echo "Luas Segitiga = {$this->Alas} x {$this->Tinggi} / 2 = {$this->Luas}" .PHP_EOL;
        echo "Keliling Segitiga = {$this->Alas} + (2 x {$this->Sisi}) = {$this->Keliling}" .PHP_EOL;
    }
    
}

$Segitiga = new bangunDatar(10,5,7);
$Segitiga->Segitiga();



?>