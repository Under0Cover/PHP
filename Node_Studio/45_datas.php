<?php
// Datas

// Setando o TimeZone
date_default_timezone_set('America/Sao_Paulo');

// Dia com 02 números
echo date('d');
echo '<br>';

// Dia textual
echo date('D');
echo '<br>';

// Mês com 02 números
echo date('m');
echo '<br>';

// Mês textual
echo date('M');
echo '<br>';

// Ano com 02 números
echo date('y');
echo '<br>';

// Ano com 04 números
echo date('Y');
echo '<br>';

// Dia da semana
echo date('l');
echo '<br>';

// Você pode misturar entre as letras Maiúsculas e Minúsculas
echo date('d/m/Y');
echo '<br>';
echo date('d/M/Y');
echo '<br>';
echo date('D, d/M/Y');
echo '<br>';
echo date('l, d/M/Y');
echo '<br>';

// Hora com formato 12h
echo date('d/M/Y h');
echo '<br>';

// Hora com formato 12h AM/PM
echo date('d/M/Y h:i A');
echo '<br>';

// Hora com formato de 24h
echo date('d/M/Y H');
echo '<br>';

// Minutos
echo date('d/M/Y H:i');
echo '<br>';

// Segundos
echo date('d/M/Y H:i:s');
echo '<br>';
echo '<hr>';

// Para armazenar no Banco de Dados

// Pode-se trabalhar com Date
// Nesse caso o modelo é assim:
$data = date('Y-m-d');
echo $data;
echo '<br>';

// Pode-se trabalhar com o Datetime
// Nesse caso o modelo é assim:
$datatempo = date('Y-m-d H:i:s');
echo $datatempo;

?>