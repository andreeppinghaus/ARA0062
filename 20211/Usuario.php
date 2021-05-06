<?php

class Usuario  {
    private $id;
    public $email;
    private $password;
    
    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // echo("$email is a valid email address");
            $this->email = $email;
          } else {
             echo("<br>$email is not a valid email address<br>");
           
          }
     
    }
    public function setPassword($password){
        ///codigo para encriptar a senha
        $password = password_hash($password, PASSWORD_BCRYPT);
        $this->password=$password;
    }

    public function setDados($row){
        if (isset($row['id'])) {
            $this->setId($row['id']);
        }
        if (isset($row['email'])) {
            $this->setEmail($row['email']);
        }
        if (isset($row['password'])) {
            $this->setPassword($row['password']);
        }
    }
}


$usuario = new Usuario();

$usuario->setEmail("Andre@net.net");

$usuario2 = new Usuario();

$usuario2->setEmail("Vitoria@net.net");

echo "<br> Email: ".$usuario->getEmail();

echo "<br>  Email: ".$usuario2->email."<br>";


$dsn="pgsql:host=localhost;port=5432;dbname=aulaphp;user=postgres;password=admlinux";

$pdo = new PDO($dsn);

// $pdo->exec("insert into usuario(email, password) values('bruno@linux.net', '894')");

$sql = 'SELECT * FROM usuario';

foreach ($pdo->query($sql) as $row) {

    $usuario->setDados($row);
    print $usuario->getId() . "<br>";
    print $usuario->getEmail() . "<br>";
    print $usuario->getPassword() . "<br>";
}



?>