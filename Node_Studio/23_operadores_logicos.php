<?php

// OPERADORES LÓGICOS
/* NOS PERMITE FAZER COMPARAÇÕES ENTRE EXPRESSÕES */

$idade = 25;
$nome = 'Rodrigo';
$cidade = 'Bahia';

if(($idade == 25) and ($nome == 'Rodrigo')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) and ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) || ($nome == 'Rodrigo')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) || ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 'Rodrigo') || ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) or ($nome == 'Rodrigo')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) or ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 'Rodrigo') or ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) xor ($nome == 'Rodrigo')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) xor ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 'Rodrigo') xor ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) and !($nome == 'Rodrigo')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 25) and !($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(($idade == 'Rodrigo') and !($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(!($idade == 25) and ($nome == 'Rodrigo')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(!($idade == 25) and ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(!($idade == 'Rodrigo') and ($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(!($idade == 25) and !($nome == 'Rodrigo')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(!($idade == 25) and !($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

echo '<br>';

if(!($idade == 'Rodrigo') and !($nome == 'Bahia')):
    echo 'É verdadeiro.';
else:
    echo 'É falso.';
endif;

?>