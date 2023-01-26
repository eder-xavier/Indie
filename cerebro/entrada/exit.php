<?php
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: ../../htmls/inicio/login.html');
?>