<?php

    if(isset($_POST['submit']) &&  !empty($_POST['usuario']) && !empty($_POST['senha']) )
    {
        //acessa

        include_once('set.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        print_r(('usuario: ' . $usuario));
        print_r(('senha ' . $senha));

    }
    else
    {
            //não acessa
            header('Location: ../htmls/inicio/login.html');
    }

?>