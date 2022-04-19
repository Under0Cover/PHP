<?php

// Verificar que tipo de request foi usado
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso Negado!');
}

// Verificar se existe usuário e senha
if(!isset($_POST['usuario']) || !isset($_POST['senha'])){
    header('Location: aula.html');
}

// Verificar os dados de login
if($_POST['usuario'] != 'João' || $_POST['senha'] != '123456'){
    echo 'Login invállido';
    exit();
}

echo 'Seja bem vindo!';

?>