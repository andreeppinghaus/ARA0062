<?php
session_start();

require_once("Banco.php");

$email = $_GET['email'];
$senha = $_GET['senha'];

$pdo =  new Banco();

//
//NAO FACA ISSO EM PRODUCAO DEVIDO AO ATAQUE DE SQL INJECTION
//
$sql = "SELECT * from usuario_quarta where email ='$email' and senha ='$senha' ";
$result = $pdo->query($sql);


if (empty($result->rowCount())) {
    unset($_SESSION["autenticado"]);
   header('Location: https://aula-php-andre-eppinghaus.000webhostapp.com/2021-1/aula-quarta/index.php');
}else{
    $_SESSION["autenticado"]=true;
     header('Location: https://aula-php-andre-eppinghaus.000webhostapp.com/2021-1/aula-quarta/menu.php');
}

/*
if ($email == 'adm@linux.net' && $senha=="123") {
    
    header('Location: http://localhost/20211/menu.php');
}else{
    $_SESSION["autenticado"]=false;
    // echo "<br>login e senha inválidos";
    header('Location: http://localhost/20211/index.html');
}
*/
?>