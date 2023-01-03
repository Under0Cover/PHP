<?php

    $conexao = new PDO('mysql:dbname=db_php7; host=localhost', 'root', '');

    $stmt = $conexao->prepare('SELECT * FROM tb_usuarios');
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $row) {
        echo "============================".'<br>';
        foreach($row as $key => $value){
            echo $key.' ==> '.$value.'<br>';
        }
    }

    

?>