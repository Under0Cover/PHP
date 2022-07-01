<!-- ARQUIVO DE 'FRONT-END' DA VISUALIZAÇÃO DE CONTATOS -->

<!-- PHP -->
<?php
    // USES
    use PDOFacil\PDOFacil;

    // REQUIRES
    require_once('..'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'PDOFacil.php');
    require_once('..'.DIRECTORY_SEPARATOR.'configs'.DIRECTORY_SEPARATOR.'config.php');
    
    // Conexão com o banco de dados
    $banco_dados = new PDOFacil(CONEXAO);


    // Buscando os contatos na base de dados
    $contatos = $banco_dados->select("SELECT * FROM CLIENTES");

?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Contatos</title>
</head>
<body>
    <h3>Contatos</h3>
    <!-- TABELA DE EXIBIÇÃO DE DADOS -->
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contatos as $contato): ?>
                <tr>
                    <td><?= $contato['NOME']?></td>
                    <td><?= $contato['TELEFONE']?></td>
                    <td><a href="../crud/editar_contatos.php?id=<?= $contato['ID_CLIENTE'] ?>">Editar</a></td>
                    <td><a href="../crud/excluir_contatos.php?id=<?= $contato['ID_CLIENTE'] ?>">Excluir</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>




    <div>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>