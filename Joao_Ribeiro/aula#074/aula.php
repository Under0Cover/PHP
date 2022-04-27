<?php
    // Vou indicar o caminho que serão armazenadas os dados da sessão
    session_save_path('C:'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR);
    // E posterior, iniciar a sessão
    session_start();

    $_SESSION['valor_aula'] = 'Aula';
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
    <h3>Página Inicial</h3>
    
    <?php if(isset($_SESSION['valor_servicos'])) : ?>
        <p><?= $_SESSION['valor_servicos'] ?></p>
    <?php endif; ?>
    
    <a href="servicos.php">Serviços</a>
</body>
</html>