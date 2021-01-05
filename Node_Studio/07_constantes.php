<?php
// Constantes
define("NOME", "Tales Oliver");
define("IDADE", 36);
define("ALTURA", 1.77);
define("ESTADOCIVIL", "Solteiro");
define("FILHOS", true);

echo 'Meu nome é '.NOME. ', minha idade é '.IDADE. ', minha altura é '.ALTURA. ' e eu sou '.ESTADOCIVIL.'.';


define("TIMES", ['São Paulo', 'Vasco', 'Botafogo']);
echo '<hr>';
echo TIMES[0];
echo '<br>';
echo TIMES[1];
echo '<br>';
echo TIMES[2];
echo '<br>';
var_dump(TIMES);
echo '<hr>';

function exibeNome() {
    echo NOME;
}

exibeNome()

?>