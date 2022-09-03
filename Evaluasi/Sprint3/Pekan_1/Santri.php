<?php

class Santri {
    protected static $id_santri = [];

    public function __construct()
    {
        while(true)
        {
            echo "=========================" .PHP_EOL;
            echo "|PENDAFTARAN SANTRI BARU|" .PHP_EOL;
            echo "=========================" .PHP_EOL;
            echo "1. Tambah Data Santri" .PHP_EOL;
            echo "2. Ubah Data Santri" .PHP_EOL;
            echo "3. Hapus Data Santri" .PHP_EOL;
            echo "4. Tampilkan Detail Data Santri" .PHP_EOL;
            echo "5. Tamplkan Seluruh Data Santri" .PHP_EOL;
            echo "6. Exit" .PHP_EOL;
            echo "Pilih No ke : ";
            $select = trim(fgets(STDIN));
    
            switch($select)
            {
                case "1" :
                    $tambah = new TambahSantri();
                    break;
                case "2" :
                    $ubah = new UbahDataSantri();
                    break;
                case "3" :
                    $hapus = new HapusDataSantri();
                    break;
                case "4" :
                    $detail = new DetailDataSantri();
                    break;
                case "5" :
                    $list = new SeluruhDataSantri();
                    break;
                case "6" :
                    echo "=== SEE YA ===" .PHP_EOL;
                    exit;
                default :
                    echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n";
            }
        }
    }
}

class TambahSantri extends Santri{
    // public static $data_santri = [];

    public function __construct()
    {
        echo "Masukkan Nama Santri : ";
        $data_santri['NAMA'] = strtoupper(trim(fgets(STDIN)));
        echo "Masukkan Jenis Kelamin Santri : ";
        $data_santri['JENIS KELAMIN'] = strtoupper(trim(fgets(STDIN)));
        echo "Masukkan Usia Santri : ";
        $data_santri['USIA'] = strtoupper(trim(fgets(STDIN)));
        echo "Masukkan Alamat Santri : ";
        $data_santri['ALAMAT'] = strtoupper(trim(fgets(STDIN)));
        echo "Masukkan Divisi Santri : ";
        $data_santri['DIVISI'] = strtoupper(trim(fgets(STDIN)));

        $number = count(parent::$id_santri) + 1;
        parent::$id_santri[$number] = $data_santri;

        echo "\n >>> DATA TELAH DITAMBAHKAN <<< \n";
    }
}

class UbahDataSantri extends Santri {
    public function __construct()
    {
        while(true)
        {
            echo "==================" .PHP_EOL;
            echo "|UBAH DATA SANTRI|" .PHP_EOL;
            echo "==================" .PHP_EOL;
            echo "1. Nama" .PHP_EOL;
            echo "2. Jenis Kelamin" .PHP_EOL;
            echo "3. Usia" .PHP_EOL;
            echo "4. Alamat" .PHP_EOL;
            echo "5. Divisi" .PHP_EOL;
            echo "\n KETIK B UNTUK KEMBALI \n" .PHP_EOL;
            echo "Pilih Data Yang Akan Di Ubah : ";
            $select = strtoupper(trim(fgets(STDIN)));
        
            switch($select)
            {
                case "1" :
                    self::dataSantri($select);
                    break;
                case "2" :
                    self::dataSantri($select);
                    break;
                case "3" :
                    self::dataSantri($select);
                    break;
                case "4" :
                    self::dataSantri($select);
                    break;
                case "5" :
                    self::dataSantri($select);
                    break;
                case "B" :
                    $santri = new Santri();
                    break;
                default :
                    echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n";
            }
        }
    }
    private static function dataSantri($number)
    {
        echo "=======================" .PHP_EOL;
        echo "|DAFTAR ID SANTRI BARU|" .PHP_EOL;
        echo "=======================" .PHP_EOL;
        
        foreach(parent::$id_santri as $key => $value)
        {
            echo "$key. " . $value['NAMA'] .PHP_EOL;
        }
    
        echo "\n KETIK B UNTUK KEMBALI \n" .PHP_EOL;
        echo "Pilih ID : ";
        $select = strtoupper(trim(fgets(STDIN)));
    
        switch($number)
            {
                case "1" :
                    self::ubahNama($select);
                    break;
                case "2" :
                    self::ubahJenisKelamin($select);
                    break;
                case "3" :
                    self::ubahUsia($select);
                    break;
                case "4" :
                    self::ubahAlamat($select);
                    break;
                case "5" :
                    self::ubahDivisi($select);
                    break;
                case "B" :
                    $santri = new Santri();
                    break;
                default :
                    echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n" .PHP_EOL;
            }    
    }
    private static function ubahNama($select)
    {
        echo "Masukkan Nama Baru : ";
        parent::$id_santri[$select]['NAMA'] = strtoupper(trim(fgets(STDIN)));
        echo "\n >>> NAMA TELAH DIUBAH <<< \n";
    }
    private static function ubahJenisKelamin($select)
    {
        echo "Masukkan Jenis Kelamin Baru : ";
        parent::$id_santri[$select]['JENIS KELAMIN'] = strtoupper(trim(fgets(STDIN)));
        echo "\n >>> JENIS KELAMIN TELAH DIUBAH <<< \n";
    }
    private static function ubahUsia($select)
    {
        echo "Masukkan Usia Baru : ";
        parent::$id_santri[$select]['USIA'] = strtoupper(trim(fgets(STDIN))); 
        echo "\n >>> USIA TELAH DIUBAH <<< \n";
    }
    private static function ubahAlamat($select)
    {
        echo "Masukkan Alamat Baru : ";
        parent::$id_santri[$select]['ALAMAT'] = strtoupper(trim(fgets(STDIN))); 
        echo "\n >>> ALAMAT TELAH DIUBAH <<< \n";
    }
    private static function ubahDivisi($select)
    {
        echo "Masukkan Divisi Baru : ";
        parent::$id_santri[$select]['DIVISI'] = strtoupper(trim(fgets(STDIN))); 
        echo "\n >>> DIVISI TELAH DIUBAH <<< \n";
    }
}

class HapusDataSantri extends Santri {
    public function __construct()
    {
        while(true)
        {
            echo "===================" .PHP_EOL;
            echo "|HAPUS DATA SANTRI|" .PHP_EOL;
            echo "===================" .PHP_EOL;
            echo "1. Nama" .PHP_EOL;
            echo "2. Jenis Kelamin" .PHP_EOL;
            echo "3. Usia" .PHP_EOL;
            echo "4. Alamat" .PHP_EOL;
            echo "5. Divisi" .PHP_EOL;
            echo "6. Hapus Data Santri" .PHP_EOL;
            echo "\n KETIK B UNTUK KEMBALI \n" .PHP_EOL;
            echo "Pilih Data Yang Akan Di Hapus : ";
            $select = strtoupper(trim(fgets(STDIN)));
        
            switch($select)
            {
                case "1" :
                    self::dataSantri($select);
                    break;
                case "2" :
                    self::dataSantri($select);
                    break;
                case "3" :
                    self::dataSantri($select);
                    break;
                case "4" :
                    self::dataSantri($select);
                    break;
                case "5" :
                    self::dataSantri($select);
                    break;
                case "6" :
                    self::dataSantri($select);
                    break;
                case "B" :
                    $santri = new Santri();
                    break;
                default :
                    echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n" .PHP_EOL;
            }
        }
    }
    private static function dataSantri($number)
    {
        echo "=======================" .PHP_EOL;
        echo "|DAFTAR ID SANTRI BARU|" .PHP_EOL;
        echo "=======================" .PHP_EOL;
        
        foreach(parent::$id_santri as $key => $value)
        {
            echo "$key. " . $value['NAMA'] .PHP_EOL;
        }

        echo "\n KETIK B UNTUK KEMBALI \n" .PHP_EOL;
        echo "Pilih ID : ";
        $select = strtoupper(trim(fgets(STDIN)));

        switch($number)
            {
                case "1" :
                    self::hapusNama($select);
                    break;
                case "2" :
                    self::hapusJenisKelamin($select);
                    break;
                case "3" :
                    self::hapusUsia($select);
                    break;
                case "4" :
                    self::hapusAlamat($select);
                    break;
                case "5" :
                    self::hapusDivisi($select);
                    break;
                case "6" :
                    self::hapusData($select);
                    break;
                case "B" :
                    $santri = new Santri();
                    break;
                default :
                    echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n" .PHP_EOL;
            }
    }
    private static function hapusNama($select)
    {
        parent::$id_santri[$select]['NAMA'] = null;
        // unset(parent::$id_santri[$select]['NAMA']);
        echo "\n >>> NAMA TELAH DIHAPUS <<< \n";
    }
    private static function hapusJenisKelamin($select)
    {
        parent::$id_santri[$select]['JENIS KELAMIN'] = null;
        // unset(parent::$id_santri[$select]['JENIS KELAMIN']); 
        echo "\n >>> JENIS KELAMIN TELAH DIHAPUS <<< \n";
    }
    private static function hapusUsia($select)
    {
        parent::$id_santri[$select]['USIA'] = null;
        // unset(parent::$id_santri[$select]['USIA']);
        echo "\n >>> USIA TELAH DIHAPUS <<< \n";
    }
    private static function hapusAlamat($select)
    {
        parent::$id_santri[$select]['ALAMAT'] = null;
        // unset(parent::$id_santri[$select]['ALAMAT']); 
        echo "\n >>> ALAMAT TELAH DIHAPUS <<< \n";
    }
    private static function hapusDivisi($select)
    {
        parent::$id_santri[$select]['DIVISI'] = null;
        // unset(parent::$id_santri[$select]['DIVISI']); 
        echo "\n >>> DIVISI TELAH DIHAPUS <<< \n";
    }
    private static function hapusData($select)
    {
        unset(parent::$id_santri[$select]); 
        echo "\n >>> DATA TELAH DIHAPUS <<< \n";
    }
}

class DetailDataSantri extends Santri {
    public function __construct()
    {
        while(true)
        {
            echo "====================" .PHP_EOL;
            echo "|DAFTAR SANTRI BARU|" .PHP_EOL;
            echo "====================" .PHP_EOL;
                
            foreach(parent::$id_santri as $key => $value)
            {
                echo "$key. " . $value['NAMA'] .PHP_EOL;
            }
        
            echo "\n KETIK B UNTUK KEMBALI \n" .PHP_EOL;
            echo "Pilih ID Yang Ingin Dilihat : ";
            $select = strtoupper(trim(fgets(STDIN)));
        
            if ($select == "B") {
                $santri = new Santri();
            }elseif($select > 0 && $select <= count(parent::$id_santri)) {
                self::dataSantri($select);
            }
        }
    }
    private static function dataSantri($select)
    {
        echo "==============" .PHP_EOL;
        echo "Santri ID $select" .PHP_EOL;
        echo "==============" .PHP_EOL;

        $list = parent::$id_santri[$select];
        foreach($list as $key => $value )
        {
            echo "$key : $value" .PHP_EOL;
        }
    }
}

class SeluruhDataSantri extends Santri {
    public function __construct()
    {
        while(true)
        {
            foreach(parent::$id_santri as $key => $value)
            {
                echo "$key.Nama   : {$value['NAMA']}" .PHP_EOL;
                echo "  Divisi : {$value['DIVISI']}" .PHP_EOL;
            }
            echo "\n KETIK B UNTUK KEMBALI \n" .PHP_EOL;
            $select = strtoupper(trim(fgets(STDIN)));
    
            switch($select)
            {
                case "B" :
                    $santri = new Santri();
                    break;
                default :
                    echo "\n ! ! ! PILIHAN TIDAK DITEMUKAN ! ! ! \n" .PHP_EOL;
            }
        }
    }
}

$Santri = new Santri();

?>