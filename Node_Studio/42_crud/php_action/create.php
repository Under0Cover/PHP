<?php
// Início da Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['botaoCadastrar'])):
    $nome = msqli_escape_string($conncet, $_POST['nome']);
    $sobrenome = msqli_escape_string($conncet, $_POST['sobrenome']);
    $email = msqli_escape_string($conncet, $_POST['email']);
    $idade = msqli_escape_string($conncet, $_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, emial, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if(mysqli_query($conncet, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../index.php');
    endif;
endif;

?>