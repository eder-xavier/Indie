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
    
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../estilos/principal/estrutura.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
  <header>
      <nav>

        <button id="new">New</button>
        <a class="logo" href="principal.php"><img id="logo" src="../../imagens/logo-indie3.png" alt="logo"></a>
        
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>

        <ul class="nav-list">

          <li>
          <a id="l" name="notific"  href="#"> <span id="notific" class='material-symbols-outlined'>
            notifications
          </span> Notifications </a>
          </li>

          <li>
            <a id="l" name="social"  href="#"> <span id="social" class='material-symbols-outlined'>
              public
            </span>Social</a>
          </li>

          <li>
            <a id="l" name="profile"  href="#"> <span id="profile"  class='material-symbols-outlined'>
              account_circle
            </span>Profile </a>
        </li>

          <li>
            <a id="l" name="archives"  href="#"> <span id="archives" class='material-symbols-outlined'>
              archive
            </span>Archives</a>
          </li>

          <li>
            <a id="l" name="settings"  href="#"> <span id="settings" class='material-symbols-outlined'>
              settings
            </span>Settings</a>
          </li>

          <li>
            <a id="l" name="logout"  href="exit.php"> <span id="logout" class='material-symbols-outlined'>
              logout
            </span>Log out</a>
        </li>

        </ul>

      </nav>
  </header>
  <main>

  </main>
    <script src="../principal/transforms.js"></script>


    <!--

    <a href="principal.php"><img src="../../imagens/indie-logo2.png" alt="logo indie" id="logo"></a>
    -->

</body>




</html>