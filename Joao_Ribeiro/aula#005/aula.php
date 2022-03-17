<?php
    /*
    Instruções Condicionais do PHP no HTML
    */
    
    $apresentar = true;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>
<body>
    <!-- Apens PHP -->
    <?php
        if($apresentar){
            echo '<p>Este parágrafo é para ser apresentado.</p>';
        } else {
            echo '<p>Não existe nada para apresentar.</p>';
        }
    ?>
    <hr>
    <!-- HTML e PHP --> 
    <?php if($apresentar): ?>
        <p>Este parágrafo é para ser apresentado.</p>
    <?php else:?>
        <p>Não existe nada para apresentar.</p>
    <?php endif;?>
</body>
</html>