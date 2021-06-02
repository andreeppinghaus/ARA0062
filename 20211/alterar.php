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
$linha = $pdo->exec( $produto->getUpdate() );

if ($linha > 0 ) {
    header('Location: http://localhost/20211/aula_quarta/editarProduto.php?ok=1&id='.$_POST['id']);
}else{
    header('Location: http://localhost/20211/aula_quarta/editarProduto.php?ok=2'.$_POST['id']);
}

?>