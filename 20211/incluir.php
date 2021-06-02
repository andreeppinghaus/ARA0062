<?php
session_start();
if (! isset($_SESSION["autenticado"])){
    
    header('Location: http://localhost/20211/aula_quarta/');
}


require_once("Banco.php");
require_once("Entity/ProdutoQuarta.php");


var_dump($_POST);

$produto = new ProdutoQuarta($_POST);

$pdo = new Banco();

$linha = $pdo->exec( $produto->getInsert() );

if ($linha > 0 ) {
    header('Location: http://localhost/20211/aula_quarta/incluirProduto.php?ok=1');
}else{
    echo "erro";
}

?>