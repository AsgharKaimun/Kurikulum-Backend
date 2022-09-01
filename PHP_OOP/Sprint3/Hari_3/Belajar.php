<?php


/**
 * 4 PILAR OOP
 * 
 * 1. Encapsulation
 * 2. Abstraction
 * 3. Inheritance
 * 4. 
 * 
 **/

//  class Fruit {
//     public $name;
//     protected $color;
//     private $weight;

//     public function hello() {
//         echo "Hello" . $this->color .PHP_EOL;
//     }
//     function set_name($n) {  // a public function (default)
//         $this->name = $n;
//     }
//     protected function set_color($n) { // a protected function
//         $this->color = $n;
//     }
//     private function set_weight($n) { // a private function
//         $this->weight = $n;
//     }
//  }

//  $mango = new Fruit();
//  $mango->set_name('Mango');
//  $mango->hello();
//  $mango->set_color('Yellow');
//  $mango->set_weight('300');

class Titan {
    public $name;
    public $weight;

    public function walk() {
        echo "Berjalan";
    }
    protected function eat() {
        echo "Memakan";
    }
}

class BeastTitan extends Titan {
    public function lemparBatu() {
        echo "Lempar Batu";
    }
}



// class PesantrenIt {
//     protected $Angkatan = 1;
// }

// class Divisi extends PesantrenIt {

// }

// class Manajemen extends Santri {

// }

// class Santri extends PesantrenIt {
//     public $nama;
//     protected $jenisKelamin;
//     private $usia = 20;
//     public $AngkatanSantri;

//     public function set_name() {
//         return $this->AngkatanSantri = $this->usia;
//     }
    
// }

// $Fathur = new Santri();
// // $Fathur->nama;
// // $Fathur->jenisKelamin;
// echo $Fathur->set_name("Fathur");
