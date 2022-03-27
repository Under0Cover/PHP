<?php
    /*
        SUBSTR
        A função substr (substring) é usada com muita frequência para capturarmos uma parte de uma string, ou seja, para criar uma nova variável ou simplesmente para apresentar uma parte de uma string. Acontece que esta função tem muito mais nuances do que habitualmente estamos habituados a usar.
    */

    $frase = 'Esta frase é para testes.';
    $substring = substr($frase, 5, 10); 
    echo $substring; //'frase é p'
    echo '<br>';

    /*
        Se verificarmos o que aconteceu:
            A variável $substring apenas ficou com 9 caracteres e não com os 10, a partir da posição 5.
            Mais uma vez teremos que usar a versão multibytes - mb_substr().
            Independentemente desse pormenor, as assinaturas são idênticas.

            A primeira é a string relativamente à qual pretendemos obter uma parte.
            A segunda é o índice a partir do qual pretendemos captar uma parte da string.
            A terceira define o número de caracteres a capturar a partir do índice.
    */

    $outra_sub = mb_substr($frase, 0, 3);
    echo $outra_sub; // 'Est'
    echo '<br>';

    $terceira_sub = mb_substr($frase, 10);
    echo $terceira_sub; // 'é para testes.'
    echo '<br>';

    /*
        Se usarmos o índice com um valor negativo, então vamos pedir à função que extraia a partir do fim.
    */

    $quarta = substr($frase, -4, 2);
    echo $quarta; // 'te'
    echo '<br>';

    $quinta = substr($frase, -3);
    echo $quinta; // 'es.'


    echo '<hr>';


    /*
        Podemos também usar o terceiro parâmetro com um valor negativo.
        Neste caso, será captada a parte da string a partir do índice, mas excluindo o número de caracteres no final, equivalente ao valor negativo.
        Ou seja, pega a variável, conta as casas (no segundo parâmetro) e, quando o terceiro parâmetro for negativo, tira aquela quantidade.
    */

    $letras = 'abcdefghijklmnop';
    $cortando = substr($letras, 8, -3);
    echo $cortando; //'ijklm' 

    /*
        Esta função devolve a string, no caso de não existir um erro.
        Antes da versão 8 do PHP, devolvia um valor 'false' em caso de erro.
        Depois do PHP8, ele devolve uma string vazia.
    */

    echo '<hr>';

    $numeros = '2468';
    $corte = substr($numeros, 5);
    var_dump($corte);

    echo '<hr>';

    // O instrutor não citou se era possível, no segundo parâmetro uma outra variável, bora testar?
    /*
        $semana = 'Amanhã é segunda-feira';
        $dia = 'segunda';
        $teste = substr($semana, $dia, 5);
        echo $teste;
    */
    // Apresenta um erro, dizendo que o parâmetro 2, necessita ser um inteiro.
?>