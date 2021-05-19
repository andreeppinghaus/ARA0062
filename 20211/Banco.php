<?php

class Banco {
    
    private $pdo;
    
    function __construct(){
        $user = 'id13482607_root';
        $pass = 'fd\OMz?d6-3<*(VY';

        $this->pdo = new PDO('mysql:host=localhost;dbname=id13482607_aula_php', $user, $pass);
    }
    
    function query($sql){
        return $this->pdo->query($sql);
    }
    
    function exec($sql){
        return $this->pdo->exec($sql);
    }
    
}



?>