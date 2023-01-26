<?php
    session_start();
    if(isset($_POST['submit']) &&  !empty($_POST['usuario']) && !empty($_POST['senha']) )
    {
        //acessa

        include_once('set.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM users WHERE usuario = '$usuario' and senha = '$senha' ";

        $results = $conexao->query($sql);

        if(mysqli_num_rows($results) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: ../../htmls/inicio/login.html');
        }
        else{
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: ../../htmls/meio/principal.php');
            
        }
    }
    else
    {
            //não acessa
            header('Location: ../../htmls/inicio/login.html');
    }

?>