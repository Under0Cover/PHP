<?php
// Início da Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['botaoEditar'])):
    $id = mysqli_escape_string($conncet, $_POST['id']);
    $nome = mysqli_escape_string($conncet, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conncet, $_POST['sobrenome']);
    $email = mysqli_escape_string($conncet, $_POST['email']);
    $idade = mysqli_escape_string($conncet, $_POST['idade']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', emial = '$email', idade = '$idade' WHERE id = '$id'";

    if(mysqli_query($conncet, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../index.php');
    endif;
endif;

?>