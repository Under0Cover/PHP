<?php
    
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