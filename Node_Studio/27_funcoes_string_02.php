<?php

// FUNÇÕES PARA STRINGS
/* 
strtoupper - CONVERTE UMA STRING PARA MAIÚSCULAS
strtolowerv - CONVERTE UMA STRING PARA MINÚSCULAS
substr - RETORNA UMA PARTE DA STRING
str_pad - COMPLEMENTA UMA OUTRA STRING COM A QUANTIDADE DEFINIDA DE CARACTERES
str_repeat - REPETE UMA STRING
strlen - RETORNA O COMPRIMENTO DE UMA STRING
str_replace - SUBSTITUI UMA PALAVRA EM UM TEXTO
strpos - RETORNA A POSIÇÃO DA PALAVRA EM UM TEXTO
*/

$nome = 'tales oliver';
$novoNome = strtoupper($nome);
echo $novoNome;
echo '<br>';

$outroNome = strtolower($novoNome);
echo $outroNome;
echo '<br>';

$mensagem = 'Olá, Mundo!';
echo substr($mensagem, 5);
echo '<br>';
echo substr($mensagem, 5, 7);
echo '<br>';

$objeto = 'Mouse';
$novoObjeto = str_pad($objeto, 7);
echo $novoObjeto;
echo '<br>';

$outroObjeto = str_pad($objeto, 10, '*');
echo $outroObjeto;
echo '<br>';

$terceiroObjeto = str_pad($objeto, 10, '*', STR_PAD_LEFT);
echo $terceiroObjeto;
echo '<br>';

$quartoObjeto = str_pad($objeto, 10, '*', STR_PAD_BOTH);
echo $quartoObjeto;
echo '<br>';

$string = str_repeat('Sucesso! ', 5);
echo $string;
echo '<br>';

// $mensagem = 'Olá, Mundo!';
echo strlen($mensagem);
echo '<br>';

$texto = 'A Seleção Argentina será campeã da próxima Copa!';
$novoTexto = str_replace('Argentina', 'Brasileira', $texto);
echo $novoTexto;
echo '<br>';

// $texto = 'A Seleção Argentina será campeã da próxima Copa!';
echo strpos($texto, 'Copa');
echo '<br>';

?>