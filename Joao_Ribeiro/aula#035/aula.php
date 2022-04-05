<?php
    /*
        FILESYSTEM
        Podemos carregar todos os dados de um ficheiro de texto para um array diretamente usando a função file().
        Vamos ver um exemplo:
    */

    $arquivo = dirname(__FILE__).'./paises.txt';
    $paises = file($arquivo, FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES);
        /* FLAGS:
            FILE_SKIP_EMPTY_LINES
                |
            FILE_IGNORE_NEW_LINES
        */
    print_r($paises);
?>