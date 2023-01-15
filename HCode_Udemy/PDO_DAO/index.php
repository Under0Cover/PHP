<?php

    require_once('config.php');

    $usuario = new Usuario();
    $usuario->login('user', '123');
    echo($usuario);

?>