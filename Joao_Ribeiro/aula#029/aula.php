<?php
    /*
        FILESYSTEM
        O processo mais linear para a gravação de textos num ficheiro é o seguinte:
            1.  Criamos uma variável, também conhecida como por handle, que é um apontador para um ficheiro.
            2.  Escrevemos texto usando funções com esse apontador
            3.  Fechamos o apontador
    */

    $ficheiro = fopen('criando.txt', 'w');
    fwrite($ficheiro, 'Primeira frase'.PHP_EOL);
    fwrite($ficheiro, 'Segunda frase'.PHP_EOL);
    fclose($ficheiro);

    /*
        Na instrução fopen, o segundo parâmetro (modo) pode ser definido de várias formas.
        As mais comuns são as seguintes:
            w   -   write   -   Abre o ficheiro apenas para escrever.
                                Se o ficheiro não existe, cria-o e se existe, apaga tudo.
            a   -   append  -   Apenas para escrever.
                                Se o ficheiro não existe, cria-o.
                                Se existe, acrescenta o texto que ao que já existe no ficheiro
        
        Existem outros modos, como por exemplo de leitura. Veremos em outro vídeo.                                
    */

    $ficheiro_append = fopen('adicionando.txt', 'a');
    fwrite($ficheiro_append, 'Mais uma frase...'.PHP_EOL);
    fclose($ficheiro_append);
?>