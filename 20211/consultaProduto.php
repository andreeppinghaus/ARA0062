<?php
session_start();
require_once("Banco.php");
require_once("Entity/ProdutoQuarta.php");

if (! isset($_SESSION["autenticado"])){
    
    header('Location: https://aula-php-andre-eppinghaus.000webhostapp.com/2021-1/aula-quarta/');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


    <title>Tela de consulta de produtos</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    
    <div class="container">
        
        <h1>Produtos cadastrados </h1>
        <br><br>
        <a class="btn btn-primary" href="incluirProduto.php" role="button">Novo produto</a>
        <br><br>
        
     <?php

        $pdo = new Banco();
        
        echo "<div class='container'>";
        echo "<table id='table_id' class='display' >";
        echo "<thead>";
        echo "<tr><th>Id</th><th>Titulo</th><th>Descricao</th><th>R$</th>
            <th></th><th></th></tr>
        ";

        echo "</thead>";
        echo "<tbody>";
        foreach($pdo->query('SELECT * from produto_quarta') as $row) {
            echo "<tr><td>".$row['id']."</td><td>".$row['titulo']."</td><td>".
                $row['descricao']."</td><td>".$row['valor']."</td><td>".
                "<a href=editarProduto.php?id=".$row['id'].">Editar</a></td><td>".
                "<a href=excluirProduto.php?id=".$row['id'].">Excluir</a></td></tr>";

            
            
        }
        echo "</tbody>";
        echo "</table>";
        
        echo "</div>";
    ?>
    
    
    </div>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
  </body>
</html>
