<?php

/*
$geral = array('usuario' =>
array('nome' => array() ,
'email' => array(),
'senha' => array()));
*/

include_once('set.php');

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$result = mysqli_query($conexao, "INSERT INTO users(usuario,nome, email, senha)
VALUES ('$usuario', '$nome', '$email', '$senha' ) " );

header('Location: ../htmls/inicio/login.html');

/*
array_push($geral ['usuario'], $usuario);
array_push($geral ['usuario'] ['nome'], $nome);
array_push($geral ['usuario'] ['email'], $email);
array_push($geral ['usuario'] ['senha'], $senha);

print_r($geral['usuario']); 
*/


?>