<?php
    /*
    Print
        O print é uma construção da linguagem PHP muito semelhante ao echo.
        As principais diferenças são:
            1.  Print apenas aceita um argumento.
            2.  Print retorna sempre o valor 1.
    */

    $nome = 'João';
    $apelido = 'Ribeiro';

    print "$nome $apelido<br>"; // válido

    print $nome . ' ' . $apelido . '<br>'; // também é válido

    // print $nome, ' ', $apelido; // inválido

    if (print($nome)){
        print(" $apelido");
    }

    // tal como acontece no echo, podemos usar o print para apresentar resultado de um função.

    print '<br>';
    print strlen("Ribeiro"); // 7

    // preferencialmente devemos usar o echo, por ser mais rápido.
    // o echo permite uma sintaxe mais curta no html

?>

<p><?php echo "João" ?></p>
<p><?= "João" ?></p>
<p><?php print "João" ?></p>