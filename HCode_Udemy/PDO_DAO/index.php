<?php

    require_once('config.php');

    $usuario = new Usuario('joaquim', 'da silva');

    $usuario->inserindo();
    echo($usuario);

?>