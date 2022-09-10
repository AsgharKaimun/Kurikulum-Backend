<?php

// Class, Object, Prperties, Method. 

class Cat {
    // Properties
    public $name;
    public $color;
    public $species;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    
    function get_name() {
        return $this->name;
    }
}

// Anggora ( "Garfield", "Orange", "Anggora" )
$Anggora = new Cat(); // Instansiasi
// $Angora->name;
echo "Sebelum Menggunakan set_name = " . $Anggora->name .PHP_EOL;
$Anggora->set_name("Garfield");
echo "Setelah Menggunakan set_name = " . $Anggora->name .PHP_EOL;


// Langsung Praktek
class Santri {
    public $nama;
    public $jurusan;

    function set_nama($nama) {
        $this->nama = $nama;
    }
    function get_nama() {
        return $this->nama;
    }


    function set_jurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
    function get_jurusan() {
        return $this->jurusan;
    }
}

$Fathur = new Santri();
$Fathur->set_nama("M Asghar Faturrahman");
$Fathur->set_jurusan("Programmer");
echo "Nama : " . $Fathur->get_nama().PHP_EOL;
echo "Jurusan : " . $Fathur->get_jurusan().PHP_EOL;

?>