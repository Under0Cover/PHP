<?php
    $nomes = ['João', 'Carlos', 'Ana'];
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
    <!-- Apresentar os nomes em lista -->
    <!-- Utilizando apenas PHP -->
    <?php
        echo '<ul>';
        foreach ($nomes as $nome){
            echo "<li>$nome</li>";
        }
        echo '</ul>';
    ?>

    <!-- Utilizando HTML e PHP -->
    <ul>
        <?php foreach ($nomes as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>