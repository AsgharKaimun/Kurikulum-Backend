<?php

class User {
    protected $host = "localhost";
    protected $dbname = "mini_academic";
    protected $username = "Arthur";
    protected $password = "DearM";
    
    public function __construct()
    {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $this->db = new PDO($dsn, "$this->username", "$this->password");
            echo PHP_EOL . "Sukses terhubung ke database $this->dbname" .PHP_EOL;
        } catch (PDOException $e) {
            echo "Terjadi kesalahan : {$e->getMessage()} pada baris ke : {$e->getLine()}" .PHP_EOL;
        }
    }
    public function index() {
        // Index ini untuk menampilkan seluruh data
        $query = "SELECT users.id,users.name,users.email,users.password,roles.role FROM users INNER JOIN roles ON roles.id = users.role_id";
        $index = $this->db->prepare($query);
        $index->execute();
        $data = $index->fetchAll(PDO::FETCH_ASSOC);
       
        foreach ($data as $user) {
            echo "id_users : {$user['id']} \n";
            echo "Nama : {$user['name']} \n";
            echo "Email : {$user['email']} \n";
            echo "Password : {$user['password']} \n";
            echo "Role : {$user['role']} \n";
            echo PHP_EOL;
        }
    }
    public function create() {
        // Create ini untuk tampilan menambah data
        echo "\n MASUKKAN DATA SANTRI \n ";
    }
    public function store() {
        // Store ini untuk logic tambah data
        // $this->create();
        echo "Masukkan Nama Santri : ";
        $name = trim(fgets(STDIN));
        echo "Masukkan Email : ";
        $email = trim(fgets(STDIN));
        echo "Masukkan Password : ";
        $password = trim(fgets(STDIN));

        $query = "INSERT INTO users (name,email,password,role_id) VALUES (:name,:email,:password,:role_id)";
        $store = $this->db->prepare($query);
        $store->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role_id' => 3
        ]);

        echo "Data berhasil ditambahkan" .PHP_EOL;
    }
    public function edit() {
        // Edit ini untuk tampilan mengubah data
        $this->index();
        echo "Pilih Id Yang Akan Diubah : ";
        $id = trim(fgets(STDIN));
        echo PHP_EOL;
        echo "1.Nama \n";
        echo "2.Email \n";
        echo "3.Password \n";
        echo "Pilih Data Yang Ingin Diubah : ";
        $select = trim(fgets(STDIN));
        $this->update($id,$select);
    }
    public function update($id,$select) {
        // Update ini untuk logic mengubah data
        switch($select) {
            case "1" :
                echo "Masukkan Perubahan : ";
                $nama = trim(fgets(STDIN));
                $query = "UPDATE users SET name = :name WHERE id = :id";
                $update = $this->db->prepare($query);
                // $update->bindParam('id',$id);
                // $update->bindParam('name',$nama);
                $update->execute([
                    'id' => $id,
                    'name' => $nama
                ]);
                echo "Nama berhasil diubah \n";
                break;
            case "2" :
                echo "Masukkan Perubahan : ";
                $email = trim(fgets(STDIN));
                $query = "UPDATE users SET email = :email WHERE id = :id";
                $update = $this->db->prepare($query);
                // $update->bindParam('id',$id);
                // $update->bindParam('name',$nama);
                $update->execute([
                    'id' => $id,
                    'email' => $email
                ]);
                echo "Email berhasil diubah \n";
                break;
            case "3" :
                echo "Masukkan Perubahan : ";
                $password = trim(fgets(STDIN));
                $query = "UPDATE users SET password = :password WHERE id = :id";
                $update = $this->db->prepare($query);
                // $update->bindParam('id',$id);
                // $update->bindParam('name',$nama);
                $update->execute([
                    'id' => $id,
                    'password' => $password
                ]);
                echo "Password berhasil diubah \n";
                break;
        }
    }
    public function destroy() {
        // Destroy ini untuk logic menghapus data
        $query = "DELETE FROM users";
        $destroy = $this->db->prepare($query);
        $destroy->execute();
        echo "Data bershasil dihapus" .PHP_EOL;
    }
    public function register() {
        // register here
    }
    public function login() {
        // Login here
    }
}


$pdo = new User();
// $pdo->store();
// $pdo->index();
$pdo->edit();
// $pdo->destroy();


?>