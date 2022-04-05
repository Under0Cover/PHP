<?php
    /*
        FILESYSTEM
        O PHP permite guardar dados em um array num ficheiro csv.
        Para isso vamos abrir e fechar um ficheiro de forma usual, mas vamos usar a função fputcsv para formatar o nosso array e escrever dentro do ficheiro.
    */

    $dados = [
        ['João', 'Programador', 47],
        ['Carlos', 'Advogado', 34],
        ['Marta', 'Professor', 29],
        ['Carla', 'Cabeleireira', 41]
    ];

    $arquivo = dirname(__FILE__).'./dados.csv';
    $ficheiro = fopen($arquivo, 'w');
    foreach($dados as $linha){
        fputcsv($ficheiro, $linha);
    }

    fclose($ficheiro);

?>