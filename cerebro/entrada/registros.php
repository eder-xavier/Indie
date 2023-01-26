<?php
    session_start();
    include_once('set.php');

    //$logado = $_SESSION['usuario'];
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
    <title>Registros</title>
    <link rel="stylesheet" href="../../estilos/regis.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
</head>
<body>
    <header>
        <h2>Registros</h1>
    </header>

    <main>
        

        <div>
            <table class="table" id="tabela">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($regis_user = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$regis_user['id']."</td>";
                        echo "<td>".$regis_user['nome']."</td>";
                        echo "<td>".$regis_user['usuario']."</td>";
                        echo "<td>".$regis_user['email']."</td>";
                        echo "<td>".$regis_user['senha']."</td>";
                        echo "<td id='config'>  <a href='edit.php?id=$regis_user[id]'><span id='conf'  class='material-symbols-outlined'>
                        settings_account_box
                        </span></a>
                        
                        <a href='excluir.php?id=$regis_user[id]'><span id='trash' class='material-symbols-outlined'>
                        delete
                        </span>
                        </a>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>