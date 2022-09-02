<?php

class BangunDatar {
    protected static $Luas;
    protected $Keliling;
    
    public static function MenuBangunDatar() 
    {
        while(true)
        {
            echo "===========================================" .PHP_EOL;
            echo "|MENGHITUNG LUAS DAN KELILING BANGUN DATAR|" .PHP_EOL;
            echo "===========================================" .PHP_EOL;
            echo "1. Segitiga" .PHP_EOL;
            echo "2. Persegi" .PHP_EOL;
            echo "3. Lingkaran" .PHP_EOL;
            echo "4. Exit" .PHP_EOL;
            echo "Pilih Bangun Datar Yang Akan Dihitung : ";
    
            $Select = trim(fgets(STDIN));
            
            switch($Select)
            {
                case "1" :
                    Segitiga::MenuSegitiga();
                    break;
                case "2" :
                    Persegi::MenuPersegi();
                    break;
                case "3" :
                    Lingkaran::MenuLingkaran();
                case "4" :
                    exit;
                default :
                    echo "\n ! ! ! PLIHAN TIDAK DITEMUKAN ! ! ! \n";
            }
        }
    }
} 

class Segitiga extends BangunDatar {
    private static $Alas;
    private static $Tinggi;

    public static function MenuSegitiga()
    {
        while(true)
        {
            echo "=======================================" .PHP_EOL;
            echo "|MENGHITUNG LUAS DAN KELILING SEGITIGA|" .PHP_EOL;
            echo "=======================================" .PHP_EOL;
            echo "1. Menghitung Luas" .PHP_EOL;
            echo "2. Menghitung Keliling" .PHP_EOL;
            echo "3. Kembali" .PHP_EOL;
            echo "4. Exit" .PHP_EOL;
            echo "Pilih No Ke : ";
            $Select = trim(fgets(STDIN));
            
            switch($Select)
            {
                case "1" :
                    self::luasSegitiga();
                    break;
                case "2" :
                    $Segitiga = new Segitiga();
                    $Segitiga->kelilingSegitiga();
                    break;
                case "3" :
                    parent::MenuBangunDatar();
                case "4" : 
                    exit;
                default :
                    echo "\n ! ! ! PLIHAN TIDAK DITEMUKAN ! ! ! \n";
            }
        }
    }
    private static function luasSegitiga()
    {
        echo "Masukkan Nilai Alas : ";
        self::$Alas = trim(fgets(STDIN));
        echo "Masukkan Nilai Tinggi : ";
        self::$Tinggi = trim(fgets(STDIN));
        parent::$Luas = self::$Alas * self::$Tinggi;
        echo PHP_EOL. "Luas Segitiga = " . parent::$Luas .PHP_EOL;
        
        while(true)
        {
            echo "Ingin Menghitung Lagi? (Y/N) :";
            $Answer = strtoupper(trim(fgets(STDIN)));
            switch($Answer)
            {
                case "Y" :
                    self::MenuSegitiga();
                case "N" :
                    exit;
                default :
                    echo "PILIH Y/N" .PHP_EOL;
            }
        }
    }
    private function kelilingSegitiga()
    {
        echo "Masukkan Nilai Alas : ";
        self::$Alas = trim(fgets(STDIN));
        $this->Keliling = self::$Alas + self::$Alas + self::$Alas;
        echo PHP_EOL . "Keliling Segitiga = " . $this->Keliling .PHP_EOL;

        while(true)
        {
            echo "Ingin Menghitung Lagi? (Y/N) :";
            $Answer = strtoupper(trim(fgets(STDIN)));
            switch($Answer)
            {
                case "Y" :
                    self::MenuSegitiga();
                case "N" :
                    exit;
                default :
                    echo "PILIH Y/N" .PHP_EOL;
            }
        }
    }
}

class Persegi extends BangunDatar {
    private static $Sisi;

    public static function MenuPersegi()
    {
        while(true)
        {
            echo "======================================" .PHP_EOL;
            echo "|MENGHITUNG LUAS DAN KELILING PERSEGI|" .PHP_EOL;
            echo "======================================" .PHP_EOL;
            echo "1. Menghitung Luas" .PHP_EOL;
            echo "2. Menghitung Keliling" .PHP_EOL;
            echo "3. Kembali" .PHP_EOL;
            echo "4. Exit" .PHP_EOL;
            echo "Pilih No Ke : ";
            $Select = trim(fgets(STDIN));
            
            switch($Select)
            {
                case "1" :
                    self::luasPersegi();
                    break;
                case "2" :
                    $Persegi = new Persegi();
                    $Persegi->kelilingPersegi();
                    break;
                case "3" :
                    parent::MenuBangunDatar();
                case "4" : 
                    exit;
                default :
                    echo "\n ! ! ! PLIHAN TIDAK DITEMUKAN ! ! ! \n";
            }
        }
    }
    private static function luasPersegi()
    {
        echo "Masukkan Nilai Sisi : ";
        self::$Sisi = trim(fgets(STDIN));
        parent::$Luas = self::$Sisi ** 2;
        echo PHP_EOL. "Luas Persegi = " . parent::$Luas .PHP_EOL;
        
        while(true)
        {
            echo "Ingin Menghitung Lagi? (Y/N) :";
            $Answer = strtoupper(trim(fgets(STDIN)));
            switch($Answer)
            {
                case "Y" :
                    self::MenuPersegi();
                case "N" :
                    exit;
                default :
                    echo "PILIH Y/N" .PHP_EOL;
            }
        }
    }
    private function kelilingPersegi()
    {
        echo "Masukkan Nilai Sisi : ";
        self::$Sisi = trim(fgets(STDIN));
        $this->Keliling = 4 * self::$Sisi;
        echo PHP_EOL. "Keliling Persegi = {$this->Keliling}" .PHP_EOL;
        
        while(true)
        {
            echo "Ingin Menghitung Lagi? (Y/N) :";
            $Answer = strtoupper(trim(fgets(STDIN)));
            switch($Answer)
            {
                case "Y" :
                    self::MenuPersegi();
                case "N" :
                    exit;
                default :
                    echo "PILIH Y/N" .PHP_EOL;
            }
        }
    }
}

class Lingkaran extends BangunDatar {
    private static $Pi = 22/7;
    private static $r;

    public static function MenuLingkaran()
    {
        while(true)
        {
            echo "========================================" .PHP_EOL;
            echo "|MENGHITUNG LUAS DAN KELILING LINGKARAN|" .PHP_EOL;
            echo "========================================" .PHP_EOL;
            echo "1. Menghitung Luas" .PHP_EOL;
            echo "2. Menghitung Keliling" .PHP_EOL;
            echo "3. Kembali" .PHP_EOL;
            echo "4. Exit" .PHP_EOL;
            echo "Pilih No Ke : ";
            $Select = trim(fgets(STDIN));
            
            switch($Select)
            {
                case "1" :
                    self::luasLingkaran();
                    break;
                case "2" :
                    $Lingkaran = new Lingkaran();
                    $Lingkaran->kelilingLingkaran();
                    break;
                case "3" :
                    parent::MenuBangunDatar();
                case "4" : 
                    exit;
                default :
                    echo "\n ! ! ! PLIHAN TIDAK DITEMUKAN ! ! ! \n";                   
            }
        }
    }
    private static function luasLingkaran()
    {
        echo "Masukkan Nilai Jarijari : ";
        self::$r = trim(fgets(STDIN));
        parent::$Luas = self::$Pi * (self::$r ** 2);
        echo PHP_EOL. "Luas Lingkaran = " . parent::$Luas .PHP_EOL;
        
        while(true)
        {
            echo "Ingin Menghitung Lagi? (Y/N) :";
            $Answer = strtoupper(trim(fgets(STDIN)));
            switch($Answer)
            {
                case "Y" :
                    self::MenuLingkaran();
                case "N" :
                    exit;
                default :
                    echo "PILIH Y/N" .PHP_EOL;
            }
        }
    }
    private function kelilingLingkaran()
    {
        echo "Masukkan Nilai Jarijari : ";
        self::$r = trim(fgets(STDIN));
        $this->Keliling = 2 * self::$Pi * self::$r;
        echo PHP_EOL. "Keliling Lingkaran = {$this->Keliling}" .PHP_EOL;
        
        while(true)
        {
            echo "Ingin Menghitung Lagi? (Y/N) :";
            $Answer = strtoupper(trim(fgets(STDIN)));
            switch($Answer)
            {
                case "Y" :
                    self::MenuLingkaran();;
                case "N" :
                    exit;
                default :
                    echo "PILIH Y/N" .PHP_EOL;
            }
        }
    }
    
}


BangunDatar::MenuBangunDatar();

?>