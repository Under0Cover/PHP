<?php

include "servicos/servico_categoria.php";
include "servicos/servico_sessao.php";
include "servico/servico_validacao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoria($nome, $idade);
header('Location: index.php');

?>