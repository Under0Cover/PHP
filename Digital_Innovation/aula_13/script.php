<?php

include "servicos/servico_sessao.php";
include "servicos/servico_validacao.php";
include "servicos/servico_categoria.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');

?>