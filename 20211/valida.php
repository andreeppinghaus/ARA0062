<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['pass'];

echo "Seu email é : $email e sua senha é: $senha";

if ($email == 'adm@linux.net' && $senha=="123") {
    $_SESSION["autenticado"]=true;
    header('Location: http://localhost/20211/menu.php');
}else{
    $_SESSION["autenticado"]=false;
    // echo "<br>login e senha inválidos";
    header('Location: http://localhost/20211/index.html');
}
?>