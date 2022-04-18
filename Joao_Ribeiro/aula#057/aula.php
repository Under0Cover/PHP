<?php
    /*
        GET
        Passando valores entre páginas da Web

        De cada vez que fazemos um clique num link, na maior parte dos casos estamos a pedir ao nosso sistema que vá para outra página.
        Na prática estamos a executar um request (pedido) que se traduz num pedido de dados ao servidor onde a nossa página se encontra.

        Tradicionalmente, quando fazemos um novo request, os valores das variáveis do PHP desaparecem e um nova vida na nossa aplicação surge como resposta ao novo pedido.

        Se tivermos a página A onde existe a variável $nome = 'João', quando abrimos a página B, a variável $nome não existe.

        Existem várias formas de passar valores entre duas páginas web (ou dois requests).
        Uma das formas mais simples, é através da query string.
        A query string é o endereço da nossa página, agregado com um conjunto de informações adicionais.
        Vejamos na prática!
    */
?>