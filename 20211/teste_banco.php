<?php

echo "<h1>Teste de banco de dados </h1>";

$user = 'id13482607_root';
$pass = 'fd\OMz?d6-3<*(VY';

$pdo = new PDO('mysql:host=localhost;dbname=id13482607_aula_php', $user, $pass);

function exibe ($pdo) {

    try {
       
       
        foreach($pdo->query('SELECT * from usuario_quarta') as $row) {
            echo "<p> id = ".$row['id']."</p>";
            echo "<p> email = ".$row['email']."</p>";
            echo "<p> senha = ".$row['senha']."</p>";
            echo "<br>==============<br>";
        }
        $pdo = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}


function incluir($pdo) {
    
    $sql = "insert into usuario_quarta(email,senha) values ('gabriel@estacio.br', '555')";
    $pdo->exec($sql);
}

// incluir($pdo);
exibe($pdo);


?>