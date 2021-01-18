<?php
// Início da Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['botaoDeletar'])):
    $id = mysqli_escape_string($conncet, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($conncet, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar!";
        header('Location: ../index.php');
    endif;
endif;

?>