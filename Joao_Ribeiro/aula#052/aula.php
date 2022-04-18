<?php
    /*
        ARRAYS
            Alterar os valores de um array com array_map
    */

    $nomes = [
        'João', 'Ana', 'Carlos'
    ];

    $modificado = array_map('saudacao', $nomes);
    print_r($modificado).PHP_EOL;

    function saudacao($valor){
        return "Olá, $valor.";
    }

    print('-------------------------------------------------------------------').PHP_EOL;
    // O array_map não altera o array original, ele irá criar e, como no exemplo, o array modificado é o array com a alteração

    print_r($nomes); // Permanece original

    print('-------------------------------------------------------------------').PHP_EOL;
    print('-------------------------------------------------------------------').PHP_EOL;
    print('-------------------------------------------------------------------').PHP_EOL;

    $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $final = array_map('elevar_ao_quadrado', $valores);
    print_r($final).PHP_EOL;

    function elevar_ao_quadrado($valor){
        $conta = $valor * $valor;
        return "O $valor ao quadrado é: $conta.";
    }
?>