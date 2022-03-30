<?php
    /*
        | PRINTF | SPRINTF | FPRINF | VSPRINTF | VFPRINTF | SSCANF | FSCANF |

        Existem várias funções com terminologia muito semelhante cuja a principal finalidade é o output, a gravação em stream ou retorno de strings de acordo com várias regras ou diretivas.

        Estas funções são particularmente complexas, porque contém um leque muito variado de possibilidades de formatação.
        Vamos olhar para o caso do printf com alguns exemplos.

        printf  -   Mostra uma string formatada (com um número variável de argumentos);
        sprintf -   Retorna a string formatada;
        vprintf -   Mostra uma string formatada (mais um array de argumentos);
        sscanf  -   Interpreta a entrada de uma string de acordo com um formato;
        fscanf  -   Interpreta a leitura de um arquivo de acordo com um formato.
    */

    /*
    ================================================================================================
    ====== TODAS ESTAS FUNÇÕES RECORREM AO MESMO TIPO DE FORMATAÇÃO, QUE VEREMOS MAIS ADIANTE. =====
    ================================================================================================
    */


    // Podemos usar a função para simplesmente fazer o output do texto.
    printf('Olá Mundo!');
    echo '<br>';

    // Podemos usar a função utilizando argumentos.
    printf("O meu nome é %s e o sobrenome é %s", 'João', 'Ribeiro');
    echo '<br>';

    // Vamos ver aplicações mais avançadas.
    $valor = 65;

        // Apresentando o código binário do $valor.
        printf("%b", $valor);
        echo '<br>';

        // Apresentando o caracter cujo código ASCII é indicado em $valor.
        printf("%c", $valor);
        echo '<br>';

        // Apresentando o valor como um inteiro do $valor.
        printf("%d", $valor);
?>