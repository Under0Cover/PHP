<?php
// Escopo Global
$nome = 'Tales Oliver';
$a = 1;
$b = 3;
$c = 5;
$d = 7;

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo '<hr>';

function exibeCidade() {
    // Escopo local
    global $cidade;
    $cidade = 'Uberaba';
}

exibeCidade();
echo $cidade;
echo '<hr>';

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'] + $GLOBALS['d'];
}

soma();

?>