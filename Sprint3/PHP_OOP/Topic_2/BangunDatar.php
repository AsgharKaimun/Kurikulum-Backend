<?php

class BangunDatar {
    protected $Luas;
    protected $Keliling;
    
    function __construct() 
    {
        echo "===========================================" .PHP_EOL;
        echo "|MENGHITUNG LUAS DAN KELILING BANGUN DATAR|" .PHP_EOL;
        echo "===========================================" .PHP_EOL;
        echo "1. Menghitung Luas" .PHP_EOL;
        echo "2. Menghitung Keliling" .PHP_EOL;
        echo "3. Menghitung Luas Dan Keliling" .PHP_EOL;
        echo "Pilih No Ke : ";
        $Select = trim(fgets(STDIN));

      switch($Select)
      {
        case "1" :
            echo "Masukkan Nilai Alas : ";
            $this->Alas = trim(fgets(STDIN));
            echo "Masukkan Nilai Tinggi : ";
            $this->Tinggi = trim(fgets(STDIN));
            $this->Luas = $this->Alas * $this->Tinggi;
            break;
        case "2" :
            echo "Masukkan Nilai Alas : ";
            $this->Alas = trim(fgets(STDIN));
            $this->Keliling = $this->Alas + $this->Alas + $this->Alas;
            break;
        case "3" :
            echo "Masukkan Nilai Alas : ";
            $this->Alas = trim(fgets(STDIN));
            echo "Masukkan Nilai Tinggi : ";
            $this->Tinggi = trim(fgets(STDIN));
            $this->Luas = $this->Alas * $this->Tinggi;
            $this->Keliling = $this->Alas + $this->Alas + $this->Alas;
            break;
      }
    }
    function __destruct()
    {
        if($this->Luas && $this->Keliling) {
            echo "Luas Segitiga = {$this->Luas}" .PHP_EOL;
            echo "Keliling Segitiga = {$this->Keliling}" .PHP_EOL;
        }elseif($this->Keliling){
            echo "Keliling Segitiga = {$this->Keliling}" .PHP_EOL;
        }elseif($this->Luas){
            echo "Luas Segitiga = {$this->Luas}" .PHP_EOL;
        }
    }
} 

$Segitiga = new BangunDatar();