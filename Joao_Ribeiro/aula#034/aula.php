<?php
    /*
        FILESYSTEM
        Na leitura de ficheiro de texto, o PHP contém nativamente algumas funções para carregar informação a partir de ficheiros CSV.

        Um ficheiro CSV (Comma Separated Values), permite guardar dados em esquema de tabela.
        É muito utilizado na exportação de dados a partir do Excel e de outras aplicações destop e web.
        O ficheiro pode conter vários formatos diferentes (dados separados por vírgulas, ponto e vírgula, demilitados por aspas, etc.)

        Veja um exemplo:
    */

    $file = fopen('exemplo.csv','r');
    $max_lines = 1;

    while (!feof($file)){
        $linha = fgetcsv($file, ';');
        print_r($linha);

        if($max_lines-- == 0){
            die('Arquivo Finalizado!');
        }
    }

    fclose($file);
?>