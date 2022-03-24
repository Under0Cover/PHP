<?php
    /*
        O PHP contém uma função muito simples de usar para criar strings com um determinado número de repetições concatenadas
    */

    $variavel_a = str_repeat('-', 20); // $variavel_a = '--------------------'
    echo $variavel_a;
    echo '<br>';
    $variavel_b = str_repeat('=|', 20); // $variavel_b = '=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|'
    echo $variavel_b;
    echo '<br>';
    /*
        Poderíamos pensar num sistema destes para apresentar linhas com valores do tipo:
        ..........100
        .........2100
        ............0
        ........45790

        No entanto necessitaríamos de mais lógica de programação.

        Para resolver essa questão, existe a função str_pad
    */
    echo '<hr>';
    $valor = 100;
    echo str_pad($valor, '50', '.', STR_PAD_LEFT);
    /*
        pad_type:
            STR_PAD_LEFT
            STR_PAD_RIGHT
            STR_PAD_BOTH
        
        É uma função particularmente interessante para sistemas de logs. Onde os caracteres são monospaced.
    */
    echo '<hr>';
    // Exemplo de utilização:
    echo '<pre>';
    $valores = [100, 2100, 0, 45790];
    foreach ($valores as $valor) {
        echo str_pad($valor, '30', '-', STR_PAD_LEFT) . PHP_EOL;
    }
?>