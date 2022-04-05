<?php
    /*
        FILESYSTEM
        Vamos aprender a ler dados de um ficheiro, neste caso, linha a linha
    */

    $ficheiro = fopen('../aula#030/dados.txt', 'r');
        /*
        Dessa forma conseguimos trazer as informações.
        Mas caso seja um arquivo que não sabemos a quantidade de linhas, vamos tentar outro exemplo
        for ($i = 1; $i <= 10; $i++){
            echo fgets($ficheiro);
        }
        */

    while(feof($ficheiro) == false){
        echo fgets($ficheiro);
    }
    fclose($ficheiro);
?>