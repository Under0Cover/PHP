<?php
    /*
        STRRPOS
            É muito semelhante a funcção STRPOS, porém, essa função procura a última ocorrência na string;
            Enquanto a STRPOS procura a primeira ocorrência.

        Descrição:
        strrpos(string $haystack, string $needle, int $offset = ?): int

        A $haystack é a string onde vamos PROCURAR a posição.
        A $needle é a string cuja posição pretendemos OBTER dentro da string.
        O $offset é um parâmetro opcional que permite definir a partir de onde é efetuada a pesquisa.
    */

    $frase = 'Esta frase serve para testes.';
    $pos = strrpos($frase, 'se');
    echo $pos; // 11 (seria 8 com a função strpos)
    echo '<hr>';

    /*
        Segundo informações do Instrutor:
            À semelhança do strpos, no PHP8 a $needle tem que ser uma string e se o resultado não existir, passamos a ter um retorno false.
    */
    
    // Vejamos o motivo de fazermos a verificação do retorno dos valores da função

    // Aqui vou fazer uma busca por uma palavra que está na posição 0 da string
    // $frase = 'Esta frase serve para testes.';
    $posicao_0 = strrpos($frase, 'Esta');
    echo (int)$posicao_0;
    echo '<br>';

    // Aqui vou fazer uma busca por uma palavra que não existe na string
    $booleano_false = strrpos($frase, 'Estas');
    echo (int)$booleano_false;
    echo '<br>';

    /*
        Ambos retornos, trazem 0.
        E nós não sabemos dizer qual é false ou qual é realmente 0.
        Por isso existe a necessidade da verificação.
    */

?> 