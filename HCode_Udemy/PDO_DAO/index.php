<?php

    require_once('config.php');

    $usuario = new Usuario();
    $usuario->carregarPeloId(1);

    echo $usuario;

?>