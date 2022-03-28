<?php
    /*
        STRSTR
        Retorna o resto da string a partir de uma ocorrência.
    */

    $frase_teste = 'Frase de teste no sistema.';
    $opcao1 = strstr($frase_teste, 'de');
    echo $opcao1; // de teste no sistema.
    echo '<hr>';

    $opcao2 = strstr($frase_teste, 'n');
    echo $opcao2; // no sistema.
    echo '<hr>';

    /*
        Esta função é case sensitive.
        Para usar a mesma função em modo case-insentitive, usamos stristr().
    */
    
    echo 'CASE INSENSITIVE';
    echo '<br>';
    $frase_case_insensitive = 'FrAsE PaRa TeStEs No SiStEmA.';
    $opca3 = stristr($frase_case_insensitive, 'p');
    echo $opca3; // PaRa TeStEs No SiStEmA.
    echo '<hr>';


    // --------------------------------------------------------------------------
    // Testando a função com variáveis.

    $texto = 'A final do Campeonato Paulista será disputada entre Palmeiras e São Paulo.';
    $edicao = 'Palmeiras';
    $final = strstr($texto, $edicao);
    echo $final; // Palmeiras e São Paulo.
    echo '<hr>';

    // --------------------------------------------------------------------------

    /*
        Existe um terceiro parâmetro que permite definir a parte da string que pretendemos obter.
        Por defeito, não usando esse parâmetro, a string obtida é o resto da string inclíndo a needle.
        Se usarmos $before_needle = true, vamos obter a parte inicial da string até à needle, excluíndo a needle.
    */

    //$frase_teste = 'Frase de teste no sistema.';
    $needle_true = strstr($frase_teste, 'no', true);
    echo $needle_true; // Frase de teste
    echo '<hr>';


    // --------------------------------------------------------------------------
    // Seguindo a documentação do PHP

    $email = 'talis.oliveira@hotmail.com.br';
    $dominio = strstr($email, '@');
    echo $dominio; //@hotmail.com.br
    echo '<br>';
    // O retorno esperado é o domínio do e-mail (Lembre-se do $before_needle como false).
    $usuario = strstr($email, '@', true);
    echo $usuario; // talis.oliveira
    // O retorno esperado é o usuário do e-mail (Lembre-se do $before_needle como true).
    echo '<hr>';

?>