<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="dados.php" method="GET">
        Nome: <input type="text" name="nome" id="nomeId"><br>
        E-mail: <input type="email" name="email" id="emailId"><br>
        <input type="submit" name="Enviar"><br>
    </form>

    <a href="dados.php?idade=25&sobrenome=Santos">Enviar dados</a>
</body>
</html>