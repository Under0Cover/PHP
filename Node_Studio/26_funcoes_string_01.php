<?php

// FUNÇÕES PARA STRINGS
/* 
strtoupper - CONVERTE UMA STRING PARA MAIÚSCULAS
strtolowerv - CONVERTE UMA STRING PARA MINÚSCULAS
substr - RETORNA UMA PARTE DA STRING
str_pad - COMPLEMENTA UMA OUTRA STRING COM A QUANTIDADE DEFINIDA DE CARACTERES
str_repeat
stlen
str_replace
strpos
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

?>