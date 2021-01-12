<?php

// FUNÇÕES PARA NÚMEROS
/*
number_format - FORMATAR OS NÚMEROS (MONETÁRIO)
round - ARREDONDA OS NÚMEROS (PARA BAIXO E PARA CIMA)
ceil - ARREDONDA OS NÚMEROS APENAS PARA CIMA
floor - ARREDONDA OS NÚMEROS APENAS PARA BAIXO
rand - RANDOMIZA OS NÚMEROS DENTRO DE UM INTERVALO
*/

$db = 1234.56;
$preco = number_format($db, 2, ',', '.');
echo `O valor do produto é R$ $preco`;
echo '<br>';

echo round(3.6);
echo round(3.4);
echo '<br>';

echo ceil(3.6);
echo ceil(3.4);
echo '<br>';

echo floor(3.6);
echo floor(3.4);
echo '<br>';

echo rand(1,50);
echo '<br>';


?>