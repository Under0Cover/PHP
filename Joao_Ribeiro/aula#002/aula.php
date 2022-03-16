<?php
    /* 
    Echo
        É a instrução mais usada para apresentar conteúdo PHP numa página web. Também podemos usar o print, más é ligeiramente mais lento e tem menos potencial.
        Podemos usar o echo com ou sem o parenteses (é uma construção especial do PHP)
        Pode ser usado com múltiplos parâmetros.
    */

    $nome = 'João';
    $apelido = 'Ribeiro';
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula 02</title>
</head>
<body>
    <?php echo $nome . ' ' . $apelido; ?> <br>
    <?php echo "$nome $apelido" ?> <br>
    <?php echo $nome, " ", $apelido ?> <br>
    <?php echo "<h3> $nome $apelido</h3>" ?>
    <?php echo "<h3 class=\"texto-vermelho\"> $nome $apelido </h3>"?>
    <?php echo '<h3 class="texto-vermelho">', "$nome $apelido","</h3>"?>
    <?= '<h3 class="texto-vermelho">',"$nome $apelido","</h3>" ?>
    <p>Nome do Cliente: <?= "<strong>$nome $apelido</strong>" ?></p>
    <p><?= substr($apelido,0,4) ?></p>

</body>
</html>