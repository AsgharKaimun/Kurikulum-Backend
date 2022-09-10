<?php

class ConnectPDO {
    protected $host = "localhost";
    protected $dbname = "pesantren_it";
    protected $username = "Arthur";
    protected $password = "DearM";
    
    public function __construct()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->username", "$this->password");
            echo "Sukses terhubung ke database $this->dbname";
        } catch (PDOException $e) {
            echo "Terjadi kesalahan : " . $e->getMessage() .PHP_EOL;
        }
    }
}

$conn = new ConnectPDO();
?>