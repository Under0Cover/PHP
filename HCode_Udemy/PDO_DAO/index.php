<?php

    require_once('config.php');

    $usuario = new Usuario();

    $usuario->carregarPeloId(8);
    $usuario->atualizarCadastro('Professor', 'abc');
    echo($usuario);

?>