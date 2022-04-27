<?php
     // Vou indicar o caminho que serão armazenadas os dados da sessão
     session_save_path('C:'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR);
     // E posterior, iniciar a sessão
     session_start();

    $_SESSION['valor_servicos'] = 'Serviços';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
</head>
<body>
    <h3>Página Serviços</h3>

    <?php if(isset($_SESSION['valor_aula'])) : ?>
        <p><?= $_SESSION['valor_aula'] ?></p>
    <?php endif; ?>

    <a href="aula.php">Aula</a>
</body>
</html>