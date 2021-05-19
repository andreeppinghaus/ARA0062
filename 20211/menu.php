<?php
session_start();
require_once("Banco.php");

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

    <title>Tela de menu</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
     <?php
        echo "<br>Consulta ao banco de dados <br>";

        $pdo = new Banco();
        
        echo "<div class='container'>";
        echo "<table class='table'>";
        echo "<tr><th>Id</th><th>Email</th><th>Senha</th>";
        
        foreach($pdo->query('SELECT * from usuario_quarta') as $row) {
            echo "<tr><td>".$row['id']."</td><td>".$row['email']."</td><td>".$row['senha']."</td></tr>";
        }
        echo "</table>";
        
        echo "</div>";
    
        foreach($pdo->query('SELECT * from usuario_quarta') as $row) {
             $html ='<div class="card" style="width: 18rem;">
                <img src="https://static.escolakids.uol.com.br/2019/07/paisagem-natural.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">'.$row['email'].'</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>';
          
            echo "$html";
        }
        

    ?>
    
    
</div>

  </body>
</html>
