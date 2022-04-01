<?php
    /*
        FILESYSTEM
        A melhor prática na criação de pastas é utilizar caminho absoluto
    */

    // Caminho relativo
    // mkdir('pasta1');

    // Caminho absoluto
    mkdir(dirname(__FILE__).DIRECTORY_SEPARATOR.'pasta1');
?>