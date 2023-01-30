<?php

//INDENTIFICAÇÃO DE SESSÕES
    session_start();
    include_once('set.php');

    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../../htmls/inicio/login.php');
    }
    $logado = $_SESSION['usuario'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM users WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM users ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie</title>
    <link rel="stylesheet" href="../../estilos/principal.css">
    <script src="../principal/principal.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    

</head>
<body>

    <header>
    <nav>
    
    <!--
     <input type="search" name="barpesquisa" id="barpesquisa"> 
     -->
     <img src="../../imagens/logo-indie.png" alt="logo indie" id="logo">


     <span id="burger" class="material-symbols-outlined" onclick="menuclick()">
        menu
    </span>

     <menu id="itens">
        <!--
            <ul>
                <li><a href="#">Opção 1</a></li>
                <li><a href="#">Opção 2</a></li>
                <li><a href="#">Opção 3</a></li>
                <li><a href="#">Opção 4</a></li>
                <li><a href="#">Opção 5</a></li>

            </ul>
        -->
        menu
     </menu>
        
    </nav>
    </header>
    <main>

    </main>
    <footer>

    </footer>

    <!--
    <a id='exit' href="exit.php">Log out</a>
    -->

</body>




</html>