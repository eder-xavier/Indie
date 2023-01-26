<?php

    //CONEXÃO ENTRE O PROGRAMA E O BANCO DE DADOS
    
    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'forms';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName );

    /*if($conexao->connect_errno)
    {
        echo "erro";
    }
    else{
        echo "deu certo";
    }
    */
?>