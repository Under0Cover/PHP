<?php
  /*
    ARRAYS
    
    Já falamos anteriormente sobre arrays.
    São também conhecidos por vetores, pilhas, listas, hashtables, etc...

    São coleções ordenadas de dados.
    Essa ordenação é feita através de chaves que são, na maior parte dos casos, do topo string (arrays associativos) ou do tipo inteiro.
    Podemos ter, inclusive, arrays multidimensionais.

    Tal como acontece com as variáveis string. os arrays têm, no PHP, um conjunto muito extenso de funções para a manipulação.
    Iremos apenas falar das principais para que possamos explorar da melhor forma estas estruturas.
  */

  // A definição de um array pode ser feita de várias formas:
    $nomes1 = array('a', 'b', 'c');
    $nomes2 = ['a', 'b', 'c'];  // Desde o PHP54
    $nomes3[] = 'João';

    echo 'nomes1'.PHP_EOL;
    print_r($nomes1).PHP_EOL;

    echo 'nomes2'.PHP_EOL;
    print_r($nomes2).PHP_EOL;

    echo 'nomes3'.PHP_EOL;
    print_r($nomes3).PHP_EOL;

    echo PHP_EOL;

    // Array Associativo
    $cliente1 = [
        'nome' => 'Carlos',
        'idade' => 35,
        'profissao' => 'Advogado'
    ];

    print_r($cliente1).PHP_EOL;

    $cliente2['nome'] = 'João';
    print_r($cliente2);

?>