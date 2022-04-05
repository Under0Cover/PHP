<?php
    /*
        FILESYSTEM
        Porquê utilizar os handles/apontadores?
        Vamos fazer um exercício simples: ler os dados de um ficheiro e guardar em outro.
    */

    // Cria os dois ponteiros
    $origem = fopen('../aula#030/dados.txt', 'r');
    $destino = fopen('dados_finais.txt','w');

    // Lê da origem e grava no destino
    while(!feof($origem)){
        fwrite($destino, fgets($origem));
    }

    // Fecha os dois handles
    fclose($origem);
    fclose($destino);
?>