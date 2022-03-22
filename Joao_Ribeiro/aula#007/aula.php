<?php
    /*
        Maiúsculas e Minúsculas
        O PHP contém algumas funções para transformar as strings
    */
    $nome_a = 'joão ribeiro';
    $nome_b = 'ANA CAROLINA';
    $nome_c = 'Franciso Santos';

    // --------------------------------------------------------------
    // Imprimindo as strings de formas originais

    echo $nome_a;
    echo '<br>';
    echo $nome_b;
    echo '<br>';
    echo $nome_c;
    echo '<hr>';

    // --------------------------------------------------------------
    // strtoupper - transforma uma string para maiúsculas

    echo strtoupper($nome_a);   // JOãO RIBEIRO
    echo '<br>';
    echo strtoupper($nome_c);   // FRANCISCO SANTOS
    echo '<hr>';

    $nome_d = 'João Luiz';
    echo strtoupper($nome_d);   // JOãO LUIS
    echo '<br>';
    echo mb_strtoupper($nome_d);   // JOÃO LUIS 
    /*
        As funções mb_* são designadas por funções multibyte e estão relacionadas com os sistemas de condições de caracteres.
        É necessário ter ativo o módulo mbstring
    */
    echo '<hr>';

    // --------------------------------------------------------------
    // strtolower - transforma uma string para minúsculas
    echo strtolower($nome_b); // ana carolina
    echo '<br>';
    echo strtolower($nome_c); // francisco santos
    /*
    De igual modo, existe a função mb_strtolower() para resolver as questões dos caracteres acentudados
    */
    echo '<hr>';
    
    // --------------------------------------------------------------
    echo ucfirst($nome_a); // João ribeiro
    $nome_e = 'índice';
    echo '<br>';
    echo ucfirst($nome_e); // índice *aqui não será capitalizada a primeira letra, pois ela é acentuada
    echo '<hr>';
    
    // --------------------------------------------------------------
    // lcfirst - transforma a primeira letra de uma string em uma letra minúscula
    echo lcfirst($nome_b); // aNA CAROLINA
    echo '<hr>';

    // --------------------------------------------------------------
    // ucwords - transforma todas as primeiras letras de cada palavra numa string em maiúsculas
    echo ucwords($nome_a);

    // ainda não existe uma função como mb_ucwords()
?>