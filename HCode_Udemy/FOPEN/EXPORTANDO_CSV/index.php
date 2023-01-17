<?php

    require_once("../../PDO_DAO/Class/Sql.php");
    require_once("../../PDO_DAO/Class/Usuario.php");

    $sql = new Sql();
    $usuarios = $sql->selecionando("SELECT * FROM tb_usuarios ORDER BY idusuario");

    $headers = array();
    
    foreach ($usuarios[0] as $key => $value){
        array_push($headers, ucfirst($key));
    }

    $file = fopen("usuarios.csv", "w+");
    fwrite($file, implode(",", $headers)."\r\r");

    foreach ($usuarios as $row) {
        $data = array();
        foreach ($row as $key => $value){
            array_push($data, $value);
        }
        fwrite($file, implode(",", $data)."\r\n");
    }

    fclose($file);
   

?>