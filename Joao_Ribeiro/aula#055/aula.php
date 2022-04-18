<?php
    /*
        COOKIES
        Como remover um cookie

        Imaginem um cenário em que criámos um cookie com uma validade de 1 ano.
        Numa atualização do nosso site, queremos que esse cookie deixe de existir na próxima visita.
        Como fazer?
    */

    // Criando o cookie
    setcookie('leu_condicoes', true, time() + (365*24*60*60), '/');

    // Verificando se o cookie existe
    if (isset($_COOKIE['leu_condicoes'])){
        setcookie('leu_condicoes', null, -1, '/');
        echo '<p>Cookie eliminado!</p>';
    }

    echo '<p>Terminado!</p>';
?>