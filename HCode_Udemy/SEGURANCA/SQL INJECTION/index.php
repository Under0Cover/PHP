<?php

    $conexao = new mysqli('localhost', 'root', '', 'db_php7');

    $id = (isset($_GET["id"])) ? $_GET["id"] : 1;

    if (!is_numeric($id) || strlen($id) > 5) {
        exit("Nice try!");
    }

    $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

    $exec = mysqli_query($conexao, $sql);

    while ($resultado = mysqli_fetch_object($exec)) {
        echo $resultado->deslogin . "<br>";
    }

?>