<?php
    /*
        ARRAYS - VERIFICAR SE É UM ARRAY E OUTROS DADOS

        Uma questão que devemos ter em cobnta é3 que as funções para operar arrays não podem ser usadas em outro tipo de dados.
        Neste caso, antes de usarmos uma função para um array, teremos que ter a certeza que estamos a usar um array.
    */

    // $valor = 'Joao';
    $valor = [1, 2, 3];

    if (is_array($valor)){
        echo 'É um array.'.PHP_EOL;
    } else {
        echo 'Não é um array.'.PHP_EOL;
    }

    // A expressão empty() pode ser usada em strings, em variáveis com valores null ou em arrays para determinar se estão vazios.
    $valor = null;
    $nome = 'Carlos';
    $valores = [];

    echo (int)empty($valor).PHP_EOL;
    echo (int)empty($nome).PHP_EOL;
    echo (int)empty($valores).PHP_EOL;

    /*
        Existe a expressão is_countable() para verificar se uma determinada variável é "contável" ou não.
        Esta função foi introduzida no PHP73
    */

    //echo (int)is_countable($valores).PHP_EOL;

    /*
        E ainda a partir do PHP71, é possível usar uma outra função designada por is_iterable().
        Iterável significa que pode ser colocado em um ciclo foreach, por exemplo.
    */

    echo (int)is_iterable($valores).PHP_EOL;
?>