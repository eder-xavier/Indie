<?php

//Permitir a edição dos dados no banco (recursos do adm)

if(!empty($_GET['id']))
{ 
include_once('set.php');


$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id = $id";

$result = $conexao->query($select);

if($result->num_rows > 0){
    while($regis_user = mysqli_fetch_assoc($result)){

        $usuario = $regis_user['usuario'];
        $email = $regis_user['email'];
        $senha = $regis_user['senha'];
        $nome = $regis_user['nome'];
    
    }

}
else{
    header("Location: registros.php");
}


}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie</title>

    <link rel="stylesheet" href="../../estilos/formsM.css">
    <link rel="stylesheet" href="../../estilos/formsP.css">


</head>
<body>
    <main>
        <section>
            <h1>Indie</h1>
            <div>
                <h2>Bem-vindo(a)!</h2>
                <form action="saveedit.php" method="post" autocomplete="on">


                    <p>
                        <input type="text" name="nome" id="inome"
                        required min="8" autocomplete="name"
                        placeholder="Nome completo" value="<?php echo $nome ?>">
                    </p>

                    <p>
                        <input type="text" name="usuario" id="iusuario"
                        required min="8" autocomplete="nickname"
                        placeholder="Usuario" value="<?php echo $usuario ?>" >
                    </p>

                    <p>
                        <input type="email" name="email" id="iemail"
                        required maxlength="30" autocomplete="email"
                        placeholder="E-mail" value="<?php echo $email ?>">
                    </p>
                    

                    <p>
                        <input type="password" name="senha" id="isenha"
                        required minlength="8" autocomplete="new-password"
                        placeholder="Senha" value="<?php echo $senha ?>">
                    </p>
                    
                <!-- 
                    <p>
                        <input type="password" name="senha" id="isenha"
                        required minlength="8" autocomplete="new-password"
                        placeholder="Confirme sua senha">
                    </p>
                -->
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <p id="enviar">
                        <input id="entrar" name="update" type="submit" value="Enviar">
                    </p>


                </form>
            </div>
        </section>
    </main>
</body>

</html>
