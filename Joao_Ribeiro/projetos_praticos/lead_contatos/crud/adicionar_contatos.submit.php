<!-- ARQUIVO DE ADIÇÃO DE CONTATOS -->
<?php
    
use PDOFacil\PDOFacil;

    // VERIFICAR SE FOI FEITO UM POST
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        die('Acesso inválido!');
    } else {
        $nome = $_POST['texto_nome'];
        $telefone = $_POST['texto_telefone'];
        // No momento não vou fazer nenhuma verificação das informações recebidas, pórem vou passar os valores por parâmetros

        // Adicionar à Base de Dados
        require_once('..'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'PDOFacil.php');
        require_once('..'.DIRECTORY_SEPARATOR.'configs'.DIRECTORY_SEPARATOR.'config.php');
        $banco_dados = new PDOFacil(CONEXAO);

        // Parâmetros
        $parametros = [
            ':nome' => $nome,
            ':telefone' => $telefone
        ];

        $banco_dados->insert("INSERT INTO CLIENTES VALUES (:nome, :telefone)", $parametros);

        echo 'Contato enviado com sucesso!';

    }
?>
<div>
    <a href="../index.php">Voltar</a>
    <span>|</span>
    <a href="../crud/adicionar_contatos.php">Novo contato</a>
</div>