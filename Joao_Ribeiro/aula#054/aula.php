<?php
    /*
        COOKIES
        Como criar um cookie com tempo de vida

        Na maior parte dos casos, os cookies são criados para deixarem no cliente um registro que pode ser posteriormente utilizado.
        Vejamos um exemplo de como criar um cookie para o nosso domínio e que vai ser usado numa próxima visita.
    */

    if(!isset($_COOKIE['visitou_o_site'])){
        // Primeira visita
        setcookie('visitou_o_site', true, time()+3600);
        echo 'É a sua primeira visita ao nosso site.';
    } else {
        // Apresentar mensagem
        echo 'Você já esteve neste site na última hora. Seja bem-vindo novamente.';
    }
?>