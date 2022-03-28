<?php
    /*
        EXPLODE E IMPLODE
        A utilização de arrays como coleções de dados é algo praticamente presente em todas as aplicações de PHP.
        Existem funções de strings também relacionadas com arrays, e estas duas são um exemplo disso.

    */
        // -------------------------------------------------------------------------------------------------------------------------------------------------
        /*
            EXPLODE

        Permite transformar uma string num array de string, recorrendo a um caracter de separação.
        */
        
        $str_nome = 'joao,carlos,ana,antonio';
        $nomes = explode(',',$str_nome);
        var_dump($nomes); // array(4) { [0]=> string(4) "joao" [1]=> string(6) "carlos" [2]=> string(3) "ana" [3]=> string(7) "antonio" } 
        echo '<hr>';

        /*
            A função explode() tem dois parâmetros obrigatórios. 
            O primeiro é o sinal que irá definir a separação. E ele pode ser qualquer caracter.
            O segundo é a string que irá sofrer a separação.
            Já o terceiro, que é opcional, quando usado, define a quantidade máxima de elementos que o array vai ter.
                O valor dele, por padrão, é null. E como null, o array vai conter o máximo de valores possíveis.
        */
        // Exemplo:
        
        $maximo = explode(',', $str_nome, 2);
        var_dump($maximo); // array(2) { [0]=> string(4) "joao" [1]=> string(18) "carlos,ana,antonio" }
        echo '<hr>';

        // OBS: Se o caracter de separação for vazio, a função retorna false.

        // -------------------------------------------------------------------------------------------------------------------------------------------------
        /* 
            IMPLODE
            
            Permite "colar" numa string um conjunto de elementos de um array.
            Para isso usa um caracter de "colagem"
        */

        $clientes = ['joao', 'carlos', 'ana', 'antonio'];
        $str_clientes = implode(', ', $clientes);
        echo $str_clientes; // joao, carlos, ana, antonio
        echo '<hr>';

        /*
            Segundo o instrutor:
            Em versões anteriores ao PHP8, podemos passar o caracter de colagem depois do array (como segundo argumento).
            Após o PHP8, não é permitido usar outra assinatura que não seja a acima.
            Eu fiz o teste utilizando o PHP72 e não consegui fazer o inverso.
            A única forma aceita foi da maneira exemplificada.


            NOTA: Existe uma outra função que é um alias (alternativa) do implode.
            É a função join(). Tem exatamente a mesma assinatura e finalidade do implode.
        */

        $str_join = join(' - ', $clientes);
        echo $str_join;
        echo '<hr>';

?>