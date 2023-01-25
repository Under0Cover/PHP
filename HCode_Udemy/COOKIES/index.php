<?php

    $data = array(
        'empresa' => 'HCode Treinamentos'
    );

    setcookie('NOME_COOKIE', json_encode($data), time() + 3600);

?>