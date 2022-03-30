<?php
    /*
        PHP CLI SAPI
        ============================================================================================================================

        No estudo do PHP é importante nunca esquecer que esta linguagem não é apenas usada para a construção de website.
        Podemos usar o PHP para a execução de operações com linha de comandos no terminal, quer seja de um servidor ou de um computador local.

        De fato, muitos procedimentos são efetuados do lado do servidor sem que o PHP necessite de um ambiente visual para apresentação de dados.

        Estes processos podem ser cronjobs (serviços executados de acordo com uma determinada regularidade) ou executados manualmente na linha de comandos.

        O PHP contém uma CLI SAPI
            CLI     -   Comand Line Interface
            SAPI    -   Server Application Programming Interface

        Permite executar instruções de uma forma muito simples.
        A CLI permite não só executar processos, mas também apresentar output no terminal (neste caso não formatado em HTML, como é óbvio).

        Exemplos:

        1.  Se queremos executar um comando de PHP:
            php -r "phpfinfo();" (-r permite executar o código sem as tags de PHP)
            php -r "echo 'Mensagem de teste';"
        2.  Se queremos executar um script de PHP:
            php [nome_do_script].php
            Ou até mesmo executar um script sem extensão .php
    */
?>