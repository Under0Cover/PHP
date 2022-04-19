<?php

// Verificar se existe os valores no POST
if(!isset($_POST['usuario']) || ($_POST['usuario']) == ''){
    header('Location: aula.html');
}

if(!isset($_POST['senha']) || ($_POST['senha']) == ''){
    header('Location: aula.html');
}

// Verificar que tipo de request foi usado
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso Negado!');
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

echo 'Arquivo finalizado!';

?>