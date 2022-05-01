<?php

    require_once '..'.DIRECTORY_SEPARATOR.'config.php';
    
    /*
        $gestor = new PDO(
            "sqlsrv:Database=".TSQL_DATABASE."; 
            server=".TSQL_SERVER."; 
            ConnectionPooling=0", 
            TSQL_USER, 
            TSQL_PASSWORD
        );
        // Por motivos ainda desconhecidos pra mim, essa parte ainda não consegue funcionar. E então, manterei a variável da forma anterior para conseguir a conexão com o banco de dados.
        // Vale ressaltar que o banco de dados que eu utilizo é o Microsoft SQL Server e para conseguir a conexão com o banco, tive que fazer vários testes até conseguir.
    */
    $gestor = new PDO("sqlsrv:Database=loja; server=OLIVER\SQLEXPRESS; ConnectionPooling=0", "teknisa", "teknisa");
    $dados = $gestor->query("SELECT * FROM CLIENTES");
    $clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h3>Clientes</h3>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>ID CLIENTE</th>
                <th>NOME</th>
            </tr>
        </thead>

        <tbody>
            <!-- CICLO DE PHP PARA EXIBIÇÃO DOS DADOS -->
            <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente['ID_CLIENTE'] ?></td>
                    <td><?= $cliente['NOME'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>Total Clientes: <strong>
        <?= count($clientes) ?>
    </strong> </p>

</body>
</html>