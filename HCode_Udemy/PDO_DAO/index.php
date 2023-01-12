<?php

    require_once('config.php');

    $sql = new Sql();
    $consulta = 'SELECT * FROM tb_usuarios';
    $usuarios = $sql->selecionando($consulta);

    echo json_encode($usuarios);

?>