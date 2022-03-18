<?php
    /*
    Exercício: Apresentar os dados de uma coleção numa tabela de HTML
        Estrutura: Nome, Genero, País
    */

    $dados = [
        ['João', 'Masculino', 'Portugal'],
        ['Ana', 'Feminino', 'Brasil'],
        ['Carlos', 'Masculino', 'Angola'],
        ['Matilde', 'Feminino', 'Moçambique'],
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Gênero</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $row): 
                $number = count($row); ?>
                <tr>
                <?php for ($i = 0; $i < $number; $i++): ?>
                    <td><?= $row[$i] ?></td>
                <?php endfor; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!--
        A opção fornecida pelo instrutor era indicar o valor do index direto na linha 39, no exemplo dele #row[0] e assim sucessivamente.
        Entretando, eu queria deixar de forma dinâmica, pois é mais interessante a prática (no meu viez) dessa forma.
    -->
</body>
</html>