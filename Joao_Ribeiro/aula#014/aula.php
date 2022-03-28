<?php
    /*
        STR_SPLT
        Permite criar um array de caracteres a partir de uma string.
    */

    $frase = 'Esta frase e para testes.';
    $split = str_split($frase);
    var_dump($split);
    echo '<hr>';

    /*
       array(25) { 
           [0]=> string(1) "E" 
           [1]=> string(1) "s" 
           [2]=> string(1) "t" 
           [3]=> string(1) "a" 
           [4]=> string(1) " " 
           [5]=> string(1) "f" 
           [6]=> string(1) "r" 
           [7]=> string(1) "a" 
           [8]=> string(1) "s" 
           [9]=> string(1) "e" 
           [10]=> string(1) " " 
           [11]=> string(1) "e" 
           [12]=> string(1) " " 
           [13]=> string(1) "p" 
           [14]=> string(1) "a"
           [15]=> string(1) "r" 
           [16]=> string(1) "a" 
           [17]=> string(1) " " 
           [18]=> string(1) "t" 
           [19]=> string(1) "e" 
           [20]=> string(1) "s" 
           [21]=> string(1) "t" 
           [22]=> string(1) "e" 
           [23]=> string(1) "s" 
           [24]=> string(1) "."
        }
    */
    
    // Podemos usar um segundo argumento, opcional, para definir o número de caracteres de cada valor do array criado.

    // $frase = 'Esta frase e para testes.';
    $split_length = str_split($frase, 3);
    var_dump($split_length);
    echo '<hr>';

    /*
        Neste caso, o str_split irá dividir a string em blocos de 3 caracteres, dentro do possível.
        array(9) { 
            [0]=> string(3) "Est" 
            [1]=> string(3) "a f" 
            [2]=> string(3) "ras" 
            [3]=> string(3) "e e" 
            [4]=> string(3) " pa" 
            [5]=> string(3) "ra " 
            [6]=> string(3) "tes" 
            [7]=> string(3) "tes" 
            [8]=> string(1) "." } 
    */

    /*
        IMPORTANTE: Tal como muitas outras funções string do PHP, há que ter cuidado com string multibyte (com caracteres acentudados).
        Neste caso podemos usar a função mb_str_split.
        Vejamos o exemplo:
    */

    /*
        $mb_string = 'É para testar essa operação.';
        $mb_split = mb_str_split($mb_string, 3);
        var_dump($mb_split);
        echo '<hr>';


        Na versão de PHP que eu utilizo, o PHP72, não foi possível fazer a chamnada dessa função!
    */
?>