<?php

// Tipos de dados Escalares
// String
$nome = "Tales";
$sobrenome = "Oliver";
var_dump($nome);
var_dump($sobrenome);
echo "<br>";

if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

// Int
$idade = 27;
var_dump($idade);
echo "<br>";

if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

// Float
$altura = 1.77;
var_dump($altura);
echo "<br>";

if(is_float($altura)):
    echo "É um número float";
else:
    echo "Não é um número float";
endif;
echo "<hr>";

//Boolean
$admin = false;
var_dump($admin);
echo "<br>";

if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;
echo "<hr>";

// Tipos de dados Compostos
// Array
$carros = array("Gol", "Uno", "Fusca", "Belina", 12, 20.6, true);
var_dump($carros);
echo "<br>";

if(is_array($carros)):
    echo "É um Array";
else:
    echo "Não é um Array";
endif;
echo "<hr>";

// Objetos
class Cliente{
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Tales");
var_dump($cliente);
echo "<br>";

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

// Tipos de dados especiais
// Null
$cidade = null;
var_dump($cidade);
echo "<br>";

//Resource
?>