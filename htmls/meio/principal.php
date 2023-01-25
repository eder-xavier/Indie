<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha'])== true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../inicio/login.html');
    }
    $login = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie</title>
</head>
<body>
    <!--
    <a id='exit' href="../../cerebro/exit.php">Log out</a>
    -->
</body>

</html>