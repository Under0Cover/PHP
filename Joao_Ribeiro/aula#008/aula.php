<?php
    /*
        COMO CONTAR O NÚMERO DE CARACTERES DE UMA STRING?
        Muitas vezes vamos necessitar calcular o número de caracteres de uma string.
        Com muita frequência recorremos rapidamente ao uso da função strlen.
    */

    $string = "Uma frase para testes.";
    $comprimento = strlen($string); // $comprimento = 22
    
    echo $comprimento;
    echo '<br>';
    echo strlen($string);
    echo '<hr>';

    // -----------------------------------------------------------------------------------
    // Quando uma variável é nula ou vazia
    
    $exemploNull = null;
    $exemploVazia = '';
    
    // echo strlen($exemploNull); // 0 - mesmo apresentando erro, ele imprime o 0
    echo '<br>';
    echo strlen($exemploVazia); // 0
    echo '<hr>';

    // -----------------------------------------------------------------------------------
    // Quando uma variável é boleana
    $sim = true;
    $nao = false;
    echo strlen($sim); // 1
    echo '<br>';
    echo strlen($nao); // 0
    echo '<hr>';

    // -----------------------------------------------------------------------------------
    // Quando uma variável é númerica
    $numero = 1250;
    echo strlen($numero); // 4 (conversão implícita)
    echo '<hr>';

    // -----------------------------------------------------------------------------------
    // Quando uma variável é um array
    $nome = ['Ana', 'Carlos', 'Miguel'];
    // echo strlen($nome); // Apresenta um erro, pois não pode ser usada com arrays. Apenas strings
    echo '<hr>';
    // Warning: strlen() expects parameter 1 to be string, array given in \PHP\Joao_Ribeiro\aula#008\aula.php on line 45

    // -----------------------------------------------------------------------------------
    // PROBLEMA!!!! - Caracteres com acentos
    $acentuado = 'João Ribeiro';
    echo strlen($acentuado); // Vai apresentar o valor 13, ainda que só existam 12 caracteres.
    echo '<br>';

    // Solução
    echo mb_strlen($acentuado);
    echo '<hr>';
?>