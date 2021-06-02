<?php
session_start();
if (! isset($_SESSION["autenticado"])){
    
    header('Location: http://localhost/20211/aula_quarta/');
}


require_once("Banco.php");
require_once("Entity/ProdutoQuarta.php");


// var_dump($_POST); die();

$produto = new ProdutoQuarta($_POST);

$pdo = new Banco();

// echo $produto->getUpdate(); die();
$linha = $pdo->exec( $produto->getDelete() );


header('Location: http://localhost/20211/aula_quarta/consultaProduto.php');

?>