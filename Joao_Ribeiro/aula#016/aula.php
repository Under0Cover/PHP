<?php
    /*
        STRPOS
            STRPOS - string position
            Permite encontrar a posição (índice) da primeira ocorrência de uma string dentro de outra string.
    */

    $frase = 'Esta frase serve para testes.';
    $pos = strpos($frase, 'se');
    echo $pos; // 8
    echo '<hr>';

    /*
        A função é descrita assim:
            strpos(string $haystack, string $needle, int $offset = ?): int
        
        A $haystack é a string onde vamos PROCURAR a posição
        A $needle é a string cuja posição pretendemos OBTER dentro da string $haystack
        O $Offset é um parâmetro opcional que permite definir a partir de onde é efetuada a pesquisa

    */

    // $frase = 'Esta frase serve para testes.';
    $rpos = strpos($frase, 'se', 10);
    echo $rpos; // 11
    echo '<hr>';

    // Será que funciona com duas variáveis?

    $exemplo = 'Hoje e terca-feira!';
    $procura = '-';
    $testando = strpos($exemplo, $procura);
    echo $testando; // 12
    echo '<br>';
    // Testando com acentuação, não dá bom!
    $exemplo_acentuado = 'Hoje é terça-feira!';
    $testando_acentuado = mb_strpos($exemplo_acentuado, $procura);
    echo $testando_acentuado; // 12
    echo '<hr>';

    // Utilizando o mb_ trouxe o mesmo resultado, então, funciona...

    // Exemplo da documentação

    $minha_string = 'abc';
    $encontre = 'f';
    $aplicando = strpos($minha_string, $encontre);
    if ($aplicando === false){
        echo "A string $encontre não foi encontrada em $minha_string.";
    } else {
        echo "A string $encontre foi encontrada em $minha_string.<br>";
        echo "E existe na posição $aplicando.";
    }
    echo '<hr>';

    // Outra forma de encontrar palavras acentuadas
    $acentuada = 'Fábio';
    $acentuada_procurando = 'á';
    $teste = strpos((utf8_encode($acentuada)), utf8_encode('á'));
    echo $teste;
    echo '<hr>';

    // Deve-se ter um cuidado extra quando se tratar de inteiros
    var_dump(strpos(12345,1)); // bool(false) 
    echo '<br>';
    var_dump(strpos(12345,'1')); // int(0)
    echo '<br>';
    var_dump(strpos('12345',1)); // bool(false) 
    echo '<br>';
    var_dump(strpos('12345','1')); // int(0)
    echo '<hr>';

    /*
        Segundo informações do instrutor:
            Com o PHP8 houve alterações na forma como definimos a $needle.
            Antes do PHP73, podíamos passar uma $needle que não fosse string.
            Era efeutada uma conversão implícita da $needle para string.
    */

    $texto = 'Esta frase 100 serve para testes.';
    $antes = strpos($texto, 100);
    echo $antes; // 11
    echo '<br>';

    /*
        Ainda segundo o instrutor:
            Com o PHP73, esta possibilidade foi descontinuada, apresentando um aviso.
            Com o PHP8 deixou de poder ser usada uma $needle que não seja string.
            Temos que fazer a conversão explícita.
    */

    $agora = strpos($texto, (string)100);
    echo $agora; // 11

    // Meu ambiente é PHP72 e eu tenho também o PHP74 instalado. E nas minhas versões, eu já não consegui reproduzir do modelo antigo.
    echo '<hr>';

    /*
        Esta função requer uma atenção muito especial quanto aos seus retornos.
        Se a $needle não for encontrada na $hastack, a função retornará false, ou 0.
        Porém, esse mesmo retorno pode acontecer quando a posição encontrada for a primeira, pois retorna a posição 0.
        E quando vamos saber se o 0 é do false ou da posição?
        Para solucionar isso, podemos utilizar o comparador triplo '==='
    */
    
    // $frase = 'Esta frase serve para testes.';
    if (mb_strpos($frase, 'abc') === false){
        echo 'Não existe.';
    } else {
        echo 'Existe.';
    }

    echo '<hr>';

?>