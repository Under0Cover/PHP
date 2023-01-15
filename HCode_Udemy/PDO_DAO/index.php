<?php

    require_once('config.php');

    $usuario = new Usuario();

    $usuario->carregarPeloId(8);
    $usuario->deletando();

    echo($usuario);

?>