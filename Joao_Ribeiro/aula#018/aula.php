<?php
    /*
        STRIPOS e STRRIPOS

        Descrições:
        
        stripos(string $haystack, string $needle, int $offset = ?): int
        strripos(string $haystack, string $needle, int $offset = ?): int

        Com as funções STRPOS e STRRPOS vamos buscar a possição da $needle dentro de uma $haystack.
        No caso das funções, elas são CASE SENSITIVE.

        Para fazermos a mesma pesquisa, mas por case insensitive, usamos as funções STRIPOS e STRRIPOS
    */

    $exemplo = 'Este quarto TEM luz.';
    $strpos = strpos($exemplo, 'T');
    echo $strpos; // 12
    echo '<br>';

    $strIpos = stripos($exemplo, 'T');
    echo $strIpos; // 2
    echo '<br>';

    /*
        IMPORTANTE:
            À semelhanças das funções STRPOS e STRRPOS, estas também têm a sua versão multibytes para caracteres acentuados.
            mb_stripos() e mb_strripos().
    */
?>