<?php
    /*
        TRIM
        Remove espaços e outros caracteres do início e do final de uma string
    */
    $string = " isto é uma string. ";

    // -------------------------------------------------------------------------
    $string = trim($string);        // $string = "isto é um string."
    var_dump($string);
    echo '<hr>';

    // -------------------------------------------------------------------------
    $string = " isto é uma string. ";
    $nova_string = trim($string);   // $string = " isto é uma string. "
                                    // $nova_string = "isto é uma string."
    var_dump($string);
    echo '<br>';
    var_dump($nova_string);
    echo '<hr>';

    // -------------------------------------------------------------------------
    $string = " isto é uma string. ";
    var_dump(trim($string));             // $string = "isto é um string."
    echo '<hr>';
    
    // -------------------------------------------------------------------------
    // ltrim e rtrim
    // Remove espaços e outros caracteres do início OU do fim da string
    var_dump(ltrim($string));
    echo '<br>';
    var_dump(rtrim($string));
    echo '<hr>';

    // -------------------------------------------------------------------------
    // Podemos usar um segundo parâmetro nestas funções
    $alfabeto = 'abcdefghijkylmnopqrstuvxw';
    var_dump(trim($alfabeto, 'a')); // Remove a primeira letra da string
    echo '<br>';
    var_dump(trim($alfabeto, 'abcd')); // Remove as primeiras posições da string
    echo '<br>';
    var_dump(trim($alfabeto, 'aw')); // Remove a primeira e a última posição da string
    echo '<br>';
    var_dump(trim($alfabeto, 'abcvxw')); // Remove as 3 primeiras e as 3 últimas posições da string
    echo '<hr>';

    // -------------------------------------------------------------------------
    // Por exemplo, apesar de existirem outras formas, podemos "limpar" o $_POST
    // $usuario = trim($_POST['usuario']); // NOTICE ALERT !

    // Não usem nas senhas. Elas podem conter propositalmente um espaço!
?>