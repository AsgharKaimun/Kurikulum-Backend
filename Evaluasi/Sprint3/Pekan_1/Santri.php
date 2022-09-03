<?php

class Santri {
    protected static $data_santri = [];

    public function __construct()
    {
        echo "=========================" .PHP_EOL;
        echo "|PENDAFTARAN SANTRI BARU|" .PHP_EOL;
        echo "=========================" .PHP_EOL;
        echo "1. Tambah Data Santri" .PHP_EOL;
        echo "2. Ubah Data Santri" .PHP_EOL;
        echo "3. Hapus Data Santri" .PHP_EOL;
        echo "4. Tampilkan Detail Data Santri" .PHP_EOL;
        echo "5. Tamplkan Seluruh Data Santri" .PHP_EOL;
    }
}

class TambahSantri extends Santri{
    protected static $nama;
    protected static $jenis_kelamin;
    protected static $usia;
    protected static $alamat;
    protected static $divisi;

    public function __construct()
        {
            echo "====================" .PHP_EOL;
            echo "|TAMBAH DATA SANTRI|" .PHP_EOL;
            echo "====================" .PHP_EOL;
            echo "1. Nama" .PHP_EOL;
            echo "2. Jenis Kelamin" .PHP_EOL;
            echo "3. Usia" .PHP_EOL;
            echo "4. Alamat" .PHP_EOL;
            echo "5. Divisi" .PHP_EOL;
        }
        public static function tambahNama($nama)
        {
            self::$nama = $nama;
            $number = count(parent::$data_santri) + 1;
            parent::$data_santri[$number] = $nama;

        }
}

class UbahDataSantri extends Santri {
    public function __construct()
        {
            echo "==================" .PHP_EOL;
            echo "|UBAH DATA SANTRI|" .PHP_EOL;
            echo "==================" .PHP_EOL;
            echo "1. Nama" .PHP_EOL;
            echo "2. Jenis Kelamin" .PHP_EOL;
            echo "3. Usia" .PHP_EOL;
            echo "4. Alamat" .PHP_EOL;
            echo "5. Divisi" .PHP_EOL;
        }
}

class HapusDataSantri extends Santri {
    public function __construct()
        {
            echo "===================" .PHP_EOL;
            echo "|HAPUS DATA SANTRI|" .PHP_EOL;
            echo "===================" .PHP_EOL;
            echo "1. Nama" .PHP_EOL;
            echo "2. Jenis Kelamin" .PHP_EOL;
            echo "3. Usia" .PHP_EOL;
            echo "4. Alamat" .PHP_EOL;
            echo "5. Divisi" .PHP_EOL;
        }
}

class DetailDataSantri extends Santri {
    public function __construct()
    {
        echo "==============================" .PHP_EOL;
        echo "|TAMPILKAN DETAIL DATA SANTRI|" .PHP_EOL;
        echo "==============================" .PHP_EOL;
        echo "1. Nama" .PHP_EOL;
        echo "2. Jenis Kelamin" .PHP_EOL;
        echo "3. Usia" .PHP_EOL;
        echo "4. Alamat" .PHP_EOL;
        echo "5. Divisi" .PHP_EOL;
    }
}

class SeluruhDataSantri extends Santri {
    public function __construct()
    {
        
    }
}
?>