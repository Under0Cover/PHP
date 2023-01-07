<?php

    $conexao = new PDO("mysql:host=localhost; dbname=db_php7", "root", "");

    $stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario = :IDUSUARIO");

    $idusuario = 4;

    $stmt->bindParam(":IDUSUARIO", $idusuario);

    $stmt->execute();

    echo 'Deletado ok!';

?>