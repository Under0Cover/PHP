<?php
    /*
        NUMBER_FORMAT
        Apresenta um número formatado de várias formas.

        IMPORTANTE:
        Existe no PHP a função money_format(), mas foi descontinuada a partir da versão PHP74.
        E não deve ser usada em novos projetos.

        Descrição:
            number_format( float $number, int $decimals, string $dec_point, string $thousands_sep ): string
            O $number é o valor que pretendemos formatar
            O $decimals é o número de casas decimais a apresentar
            O $dec_point é o caracter que vai ser apresentado para separar a parte inteira da parte décimal
            O $thousands_sep é o caracter que irá ser apresentado na separação do número em milhares
    */

    $valor = 100;
    echo number_format($valor, 0, null, null); // 100
    echo '<br>';
    echo number_format($valor, 2, ',', null); // 100,00
    echo '<hr>';

    $valor_2 = 100.45;
    echo number_format($valor_2, 3, ',', null); // 100,450
    echo '<br>';
    echo number_format($valor_2, 1, ',', null); // 100,5
    echo '<hr>';

    $valor_3 = 123456.758; 
    echo number_format($valor_3, 2, ',','.'); //123.456,76
    echo '<br>';
    // Esta é a forma mais indicada para apresentar valores monetários.
    echo '<hr>';

    $valor_4 = 125.2;
    echo number_format($valor_4, 2, ',', null). ' €'; // 125,20 €
?>