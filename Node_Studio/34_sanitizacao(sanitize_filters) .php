<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<?php
// SANITIZAÇÕES

/*
FUNÇÕES (FILTER_INPUT - FILTER_VAR)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/

if (isset($_POST['enviarFormulario'])):
    // Array de erros
    $erros = array();

    // Sanitizações
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $nome.'<br>';

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    // echo $idade.'<br>';
    if (!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = 'Idade precisa ser um número inteiro!';
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    // echo $email.'<br>';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = 'E-mail precisa ser um e-mail válido!';
    endif;

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    // echo $url.'<br>';
    if (!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[] = 'URL inválida!';
    endif;

    // Conferência das validações
    if(!empty($erros)):
        foreach ($erros as $erro):
            echo `<li> $erro </li>`;
        endforeach;
    else:
        echo 'Parabéns, seus dados estão corretos!';
    endif;
endif;

?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome" id="nomeId"><br>
        Idade: <input type="text" name="idade" id="idadeId"><br>
        E-mail: <input type="email" name="email" id="emailId"><br>
        URL: <input type="text" name="url" id="urlId">
        <button type="submit" name="enviarFomulario">Enviar</button>
    </form>
</body>
</html>