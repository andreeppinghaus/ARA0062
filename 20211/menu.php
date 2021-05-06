<?php
session_start();
if (isset($_SESSION["autenticado"])){
    if (! $_SESSION["autenticado"] ) {
        header('Location: http://localhost/20211/index.html');
    }
}else {
    header('Location: http://localhost/20211/index.html');
}
?>
<html>
    <head> <title> Tela de menu </title></head>
    <body>

    <?php
        echo "<br>Consulta ao banco de dados <br>";


        // $pdo = new PDO();



    ?>
    </body>
</html>