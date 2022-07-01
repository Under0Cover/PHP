<!-- ARQUIVO DE EXCLUSÃO DE CONTATOS -->
<?php

    // USES
    use PDOFacil\PDOFacil;


    // Verificar se existe o id passado pelo GET
    if(!isset($_GET['id'])){
        die('Acesso negado!');
    } else {
        $id_contato = $_GET['id'];

    // REQUIRES
    require_once('..'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'PDOFacil.php');
    require_once('..'.DIRECTORY_SEPARATOR.'configs'.DIRECTORY_SEPARATOR.'config.php');
    
    // Conexão com o banco de dados
    $banco_dados = new PDOFacil(CONEXAO);

    $parametros = [
        ':ID_CLIENTE' => $id_contato
    ];

    $banco_dados->delete("DELETE FROM CLIENTES WHERE ID_CLIENTE = :ID_CLIENTE", $parametros);

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Contato</title>
</head>
<body>
    <h5>CONTATO ELIMINADO COM SUCESSO!</h5>

    
    <div>
        <a href="../index.php">Voltar</a>
        <span>|</span>
        <a href="../crud/visualizar_contatos.php">Visualizar Contatos</a>
    </div>
</body>
</html>