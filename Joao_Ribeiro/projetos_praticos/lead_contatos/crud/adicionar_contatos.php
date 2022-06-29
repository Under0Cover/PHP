<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contato</title>
</head>
<body>
    <form action="adicionar_contatos.submit.php" method="post">
        <div>
            <label>Nome:</label>
            <input type="text" name="texto_nome" maxlength="50"> <!-- UTILIZANDO O MAXLENGTH DE 50, POIS É O LIMITE NO BANCO DE DADOS -->
        </div>
        <br>
        <div>
            <label>Telefone:</label>
            <input type="text" name="texto_telefone" maxlength="20"> <!-- UTILIZANDO O MAXLENGTH DE 20, POIS É O LIMITE NO BANCO DE DADOS -->
        </div>
        <br>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
    <br><br>
    <a href="../index.php">Voltar</a>
</body>
</html>