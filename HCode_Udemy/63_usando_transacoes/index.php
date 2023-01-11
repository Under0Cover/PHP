<?php

    $conexao = new PDO("mysql:host=localhost; dbname=db_php7", "root", "");

    $conexao->beginTransaction();

    $stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario = :IDUSUARIO");

    $idusuario = 2;

    $stmt->bindParam(":IDUSUARIO", $idusuario);

    $stmt->execute();

    // $conexao->rollback();
    $conexao->commit();

    echo 'Deletado ok!';

?>