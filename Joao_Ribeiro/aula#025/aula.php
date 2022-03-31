<?php
    $valor = 425.7;
    
    // Apesar de existirem outras funções para o efeito, podemos usar o formato para apresentar valores monetários.
    echo "O valor total da compra foi de $valor €" .PHP_EOL;
    echo sprintf("O valor total da compra foi de %01.2f €", $valor) . PHP_EOL;

    /*
        No exemplo acima, o %0 define o valor inteiro imediatamente a seguir, define a quantidade.
        O . indica a separação para as casas decimais e o 2f determina que devem ser apresentados 2 casas decimais.
    */

    // Apresentação no terminal
    echo sprintf("%'_20d", $valor). PHP_EOL;

    $arrayValores = [ 23.35, 456.258, 7.1, 123 ];

    foreach($arrayValores as $valorunico){
        echo sprintf("O preço é: %'.30.2f €", $valorunico). PHP_EOL;
    }

?>