<?php

//UPDATES NO BANCO DE DADOS

    include_once('set.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $dataupdate = "UPDATE users SET nome='$nome', usuario = '$usuario', email = '$email', senha = '$senha' 
        WHERE id = '$id' ";

        $result = $conexao->query($dataupdate);
    }
    header("Location: registros.php");
?>