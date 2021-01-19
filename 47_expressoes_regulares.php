<?php
// Expressões regulares
/*
- Define um padrão a se usado para procurar ou substituir palavras ou grupo de palavras.
- ^     -> início da expressão
- $     -> final da expressão
- /i    -> case sensitive
- []    -> conjunto de catacteres
- {}    -> ocorrências
*/

//$string = 'abc';
// Início da Expressão
//$padrao = '/^a/';
// Fim da Expressão
//$padrao = '/c$/';

// Validação de caracteres
//$string = 'a';
//$padrao = '/^[a-z]/';

// Validação de números
//$string = '5';
//$padrao = '/[0-9]/';

// Validação de Maiúsculas
//$string = 'Q';
//$padrao = '/[A-Z]/';

// Validação de Maiúsculas, Minúsculas e Números
//$string = 'R';
//$padrao = '/[a-z0-9]/i';

// Validação de String com mais de 1 caracter
//$string = '250g';
//$padrao = '/[a-z0-9]{1,4}/i';

// ?    -> Aceita 0 ou 1 ocorrência
// *    -> Aceita 0 ou muitas ocorrências
// +    -> Aceita 1 ou mais ocorrências

// Validando um E-mail
//$string = 'contato@gmail.com';
//$padrao = '/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net|org)$/i'; 

// Validando data
$string = '13/09/2018';
$padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{2,4}$/';


if(preg_match($padrao, $string)):
    echo 'Válido';
    echo '<hr>';
    echo $string;
else:
    echo 'Inválido';
    echo '<hr>';
    echo $string;
endif;

?>