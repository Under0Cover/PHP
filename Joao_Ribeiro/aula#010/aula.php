<?php
    /*
        Nas regras de negócio do nosso código vamos necessitar usar funções que permitem verificar qual o conteúdo de uma string.
        Se contém outra string, se começa pela letra X, termina com Y ou quantas letras 'A', 'B' ou 'C' tem na string.

        O PHP oferece várias funções para essa finalidade.
    */

    $frase = 'Esta frase é usada para testes';

    // str_contains - verifica se uma string existe dentrou de outra - retorna true ou false

    // --------------------------------------------------------------------------------------------------------------------------------------------------
    $palavra = 'para';

    if(str_contains($frase, $palavra)){
        echo 'SIM!';
    } else {
        echo 'NÃO!';
    }
    echo '<br>';

    // A função str_contains é implementada no PHP8, como eu estou utilizando o PHP72, por motivos profissionais, trouxe um erro no meu documento.

    // --------------------------------------------------------------------------------------------------------------------------------------------------
    $nova_palavra = 'USA';

    if(str_contains($frase, $nova_palavra)){
        echo 'SIM!';
    } else {
        echo 'NÃO!';
    }
    echo '<br>';

    /*
        A função é case insensitive, ou seja, não faz diferenciação entre maiúsculas e minúsculas.
        No exemplo, a respota será 'true', pois a frase que estamos procurando, contém a palavra 'usada'.
        E 'USA' contém na palavra usada.
    */

    // --------------------------------------------------------------------------------------------------------------------------------------------------
    $silaba = 'ua';

    if(str_contains($frase, $silaba)){
        echo 'SIM!';
    } else {
        echo 'NÃO!';
    }
    echo '<br>';

    // Neste exemplo não existe em nenhuma parte as duas vogais juntas. Por isso, retorna 'false'

    // --------------------------------------------------------------------------------------------------------------------------------------------------
    
    /*
        Para percebermos se uma string começa ou termina com uma determinada string, usamos as funções str_ends_with() e str_starts_with().
        Ambas as funções são case sensitive, por isso, importa a diferença entre maiúsculas e minúsculas.
        Nas duas funções, podemos utilizar uma única letra, uma expressão ou até mesmo concatenações de outras variáveis.
        O ponto importante é sempre lembrar de que a função faz essa diferenciação de maiúsculas e minúsculas, fora isso, a comparação é livre.
        Ainda utilizando a variável => $frase = 'Esta frase é usada para testes';
    */

    if(str_starts_with($frase, 'E')){
        echo 'SIM!';
    } else {
        echo 'NÃO!';
    }
    echo '<br>';

    // O retorno será 'true', pois a comparação é feita com a letra maiúscula. Se fosse minúscula o retorno seria 'false'.

    if(str_ends_with($frase, 'tes.')) {
        echo 'SIM!';
    } else {
        echo 'NÃO!';
    }
    echo '<br>';

    // Aqui o retorno também será 'true'. Primeiro por comparação entre maiúsculas e minúsculas. E segundo, pois até o 'ponto final' faz diferença na comparação

    /*
        OBSERVAÇÕES:
            Estas funções são destinadas cada uma a sua função específica.
            Contudo, existe uma função que "unifica" todas estas: preg_match().
            Uma vez que recorre ao uso de expressões regulares, veremos em aulas específicas sobre expressões regulares, como alcançar os mesmos resultados.
    */
?>