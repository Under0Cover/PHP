<?php
    /*
        Para além do $argv, que contém a coleção de valores dos parâmetros, existe o $argc que guarda o número de parâmetros para o script de PHP.

        $argv tem os valores dos parâmetros
        $argc guarda a quantidade de parâmetros
    */

    // echo $argc;  // php argc.php             // 1
                    // php argc. php 100        // 2

    /*
        Vamos, por exemplo, criar um script que guarda num ficheiro valores númericos aleatórios.

        > O nosso script vai aceitar, por padrão, a criação de um ficheiro com 10 valores.
        > Se passarmos um parâmetro vai escrever esse número de valores no novo ficheiro.
        > Se passarmos um segundo parâmetro, vamos definir o intervalo de valores a sortear, caso contrário, serão sorteados entre 0 e 100.
    */

    $vezes = 10;
    $minimo = 0;
    $maximo = 100;

    // Verifica os argumentos passados
    if ($argc == 2){
        $vezes = $argv[1];
    } else if ($argc == 4){
        $vezes = $argv[1];
        $minimo = $argv[2];
        $maximo = $argv[3];
    }

    $file = fopen(time().'.txt', 'w');
    
    for ($i = 0; $i < $vezes; $i++){
        fwrite($file, rand($minimo, $maximo) . PHP_EOL);
    }

    fclose($file);

?>