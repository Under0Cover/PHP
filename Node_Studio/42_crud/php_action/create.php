<?php
// Início da Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
    global $conncet;
    // Proteção do SQL Injection
    $var = mysqli_escape_string($conncet, $input);
    // Proteção do XSS
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['botaoCadastrar'])):
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

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