<?php
    /*
    CICLOS DE PHP NO HTML
        A escrita de código PHP deve ser o mais simples possivél para facilitar
        a leitura do fluxo. Por outro lado, devemos procurar criar condições
        para rapidamente alterar o aspecto visual dos dados que apresentamos.
    */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula</title>
</head>
<body>
    <!--Usando só o PHP -->
    <?php
        for ($i = 100; $i < 120; $i++){
            echo "<p class=\"cor\">$i</p>";
        }
    ?>
    <hr>
    <!-- HTML e PHP -->
    <?php for ($i = 100; $i < 120; $i++): ?>
        <p class="cor"><?= $i ?></p>
    <?php endfor; ?>
</body>
</html>