<?php


class Kendaraan {
    protected static function isiBahanBakar()
    {
        echo "Mengisi bahan bakar kendaraan ..";
    }
}

class Mobil extends Kendaraan {
    
    function __construct()
    {
        self::isiBensin();
        echo PHP_EOL;
        $this->tambahKecepatan();
    }
    // Method Static
    public static function isiBensin()
    {
        echo "Mengisi bahan bakar mobil ..";
    }
    public function tambahKecepatan()
    {
        echo "Tambah kecepatan ..";
    }
}

class Motor {
    public static $berat = "20 kg";
    protected static $bensin;

    public function __construct()
    {
        Mobil::isiBensin();
        $motor = new Mobil();
        $motor->tambahKecepatan();
    }
}

class BangunDatar {
    private static $Luas;
    private static $Keliling;
    private static $Jarijari;

    public static function Lingkaran()
    {
        
        echo "MENGHITUNG LUAS DAN KELILING LINGKARAN" .PHP_EOL;
        echo "Masukkan Nilai Jarijari : ";
        self::$Jarijari = trim(fgets(STDIN));
        self::$Luas = 22/7 * self::$Jarijari * self::$Jarijari;
        self::$Keliling = 22/7 * (2 * self::$Jarijari);
        echo "Luas Lingkaran = " . self::$Luas .PHP_EOL;
        echo "Keliling Lingkaran = " . self::$Keliling .PHP_EOL;
    }
}
// $civic = new Mobil();
// $civic->tambahKecepatan();
// Mobil::isiBensin();
// $motor = new Motor();
// echo Motor::$berat;

echo BangunDatar::Lingkaran();

/**
 * Tugas
 * 1. Cari tahu perbedaan keyword parent dan self
 * 2. Buatlah sebuah program perhitungan sederhana dengan ketentuan sebagai berikut
 * - Program harus dinamis.
 * - Terdapat Class BangunDatar yang merupakan induk dari Class Persegi, Segitiga, Lingkaran
 * - Dimana masing-masing child Class memiliki method luas dan keliling dari bangun datar.
 * - Gunakan static method untuk perhitungan luas dan non-static method untuk perhitungan keliling.
 * - Buatlah dalam satu file.
 * - User dapat melakukan perhitungan berkali-kali.
 * - Deadline nya hari Jum'at jam 8 malam.
 * - Push di github masing" di repo kurikulum backend, sprint-3, topic-4, namafile.php
 * - Kumpulkan link commit terakhir kalian dalam bentuk list di grup telegram.
 */


?>