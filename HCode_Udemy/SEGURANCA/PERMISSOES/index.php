<?php

    $pasta = 'arquivos';
    $permissao = "0775";

    if(!is_dir($pasta)){
        mkdir($pasta, $permissao);
        echo 'Diretório criado com sucesso!';
    }

    /*
        PERMISSÕES:
            - 0: SEM PERMISSÃO NENHUMA
            - 1: PERMISSÃO DE EXECUÇÃO
            - 2: PERMISSÃO DE GRAVAÇÃO
            - 3: PERMISSÃO DE EXECUÇÃO E GRAVAÇÃO
            - 4: PERMISSÃO DE LEITURA
            - 5: PERMISSÃO DE LEITURA E EXECUÇÃO
            - 6: PERMISSÃO DE LEITURA E GRAVAÇÃO
            - 7: PERMISSÃO TOTAL DE EXECUÇÃO, GRAVAÇÃO E LEITURA

        TRÍADE DE PERMISSÕES:
            - CASA DA CENTENA:  SE REFERE A QUEM CRIOU O DIRETÓRIO
            - CASA DA DEZENA:   SE REFERE AO GRUPO DE USUÁRIOS
            - CASA DA UNIDADE:  O RESTANTE
    */

?>