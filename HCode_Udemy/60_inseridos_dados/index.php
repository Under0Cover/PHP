<?php

    $conexao = new PDO("mysql:host=localhost; dbname=db_php7", "root", "");

    $stmt = $conexao->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:DESLOGIN, :DESSENHA)");

    $login = "José";
    $senha = "123456789";

    $stmt->bindParam(":DESLOGIN", $login);
    $stmt->bindParam(":DESSENHA", $senha);

    $stmt->execute();

    echo 'Inserido ok!';

?>