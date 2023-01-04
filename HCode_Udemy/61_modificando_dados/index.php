<?php

    $conexao = new PDO("mysql:host=localhost; dbname=db_php7", "root", "");

    $stmt = $conexao->prepare("UPDATE tb_usuarios SET deslogin = :DESLOGIN, dessenha = :DESSENHA WHERE idusuario = :IDUSUARIO");

    $login = "João";
    $senha = "987654321";
    $idusuario = 2;

    $stmt->bindParam(":DESLOGIN", $login);
    $stmt->bindParam(":DESSENHA", $senha);
    $stmt->bindParam(":IDUSUARIO", $idusuario);

    $stmt->execute();

    echo 'Alterado ok!';

?>