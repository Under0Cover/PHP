<?php
    /*
        FILESYSTEM - CRIAR PASTAS NO PHP
        mkdir ( string $pathname, int $mode = ?, bool $recursive = ?, resource $context = ?): bool
    */

    /*
        Funções a serem aplicadas no terminal:
    */
        //Para criar uma pasta usamos a função mkdir
        mkdir ('pasta1');

        // Criar uma pasta dentro de outra
        mkdir ('pasta1/pasta2');

        // Criar duas pastas uma dentro da outra ao mesmo tempo
        mkdir('teste/outra', 0777, true);

        // Remover uma pasta
        rmdir('pasta1');

?>