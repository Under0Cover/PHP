<?php
    /*
        PERCEBENDO O FORMATO DE SPRINTF - PARTE 1

        A função sprintf retorna uma string formatada de acordo com um determinado formato.
        Percebendo como funciona a definição desse formato, ficaremos a perceber como funciona o formato para as outras funções referidas na outra aula.

        Descrição:
        sprintf(string $format, mixed $args = ?, mixed $... = ?): string

        O $format é uma string composta de diretivas.
        As diretivas são constituídas por caracteres que são copiadas diretamente para o resultado da string e por especificações de conversão, cada uma das quais com outputs distintos.

        As especificações de conversão seguem a seguinte filosofia:
            %[argnum$][flags][width][.precision]specifier


        ALGUNS EXEMPLOS:
    */

    $localizacao = 'da sala';
    $total_pessoas = 123;

    // %s   -   transforma-se num parâmetro de string
    echo sprintf("Existem %s pessoas dentro %s", $total_pessoas, $localizacao);
    echo '<br>';

    // %d   -   trata o argumento como um valor númerico
    echo sprintf("Existem %d pessoas dentro %s", $total_pessoas, $localizacao);
    echo '<br>';

    // %n   -   caso a ordem dos argumentos for alterada, podemos utilizar o %1, %2, %n para identificar qual o argumento, seguido de $ e o tipo de output pretendido
    echo sprintf('Dentro %2$s foram encontradas %1$d pessoas', $total_pessoas, $localizacao);
    echo '<br>';
        // Podemos inclusive fazer referência a cada um dos valores.
        echo sprintf('Dentro %2$s foram encontradas %1$d pessoas. %1$d é a capacidade máxima %2$s!', $total_pessoas, $localizacao);
        echo '<br>';
    
    // '    -   define o padding do caracter imediatamente  seguinte. Logo após o caracter escolhido, definimos o número de repetições desse caracter e depois o especificador  que determina como vai ser tratado o valor do argumento.
    echo sprintf("Capacidade:%'-10d", $total_pessoas);
    echo '<br>';
            // A expressão seguinte irá acrescentar "zeros" ao número de pessoas.
            echo sprintf('Dentro %2$s estão %1$08d pessoas', $total_pessoas, $localizacao);
?>