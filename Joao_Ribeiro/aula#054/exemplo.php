<?php
    /*
        COOKIES
        Como criar um cookie com tempo de vida

        O tempo de vida de um cookie é definido em segundos.
        Vamos ver o exemplo de um cookie que só tem 10 segundos de duração, e um de 1 ano.
    */

    // 10 segundos
    if(!isset($_COOKIE['site'])){
        // Primeira visita
        setcookie('site', true, time() + 10);
        echo 'É a sua primeira visita ao site. Bem vindo!';
    } else {
        // Apresentar mensagem
        echo 'Você estava aqui nos últimos 10 segundos. Seja bem vindo novamente!';
    }

    echo '<hr>';
    echo '<hr>';
    echo '<hr>';

    if(!isset($_COOKIE['ano'])){
        // Primeira visita
        setcookie('ano', true, time() + (365*24*60*60));
        echo 'É a sua primeira visita ao site. Bem vindo!';
    } else {
        // Apresentar mensagem
        echo 'Você estava aqui no último ano. Seja bem vindo novamente!';
    }
?>