<?php

// Perceba que nos temos até aqui:
// Dois arquivos e duas classes com o mesmo nome
// O namespace vem justamente para diferenciar esses arquivos

// Aqui damos o require nos dois arquivos
require 'classes/produto.php';
require 'modulos/produto.php';

// Se fizermos a instância do modo anterior
// $produto = new Produto();
// O Sistema retorna erro pois possuem dois arquivos com o mesmo nome
// Então, tem que ser específico em relação a qual arquivo você quer

$produto = new \classes\Produto();
$produto->mostrarDetalhes();

echo '<hr>';

// Outra forma de fazer é utilizando o use
// use pasta\arquivo;
// Utilizando o use, você pode apelidar o arquivo

use modulos\Produto as productModel;
use classes\Produto as productClasse;

$produto_a = new productModel();
$produto_a->mostrarDetalhes();

?>