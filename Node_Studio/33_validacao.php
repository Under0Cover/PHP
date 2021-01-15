<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<?php
// VALIDAÇÕES

/*
FUNÇÕES (FILTER_INPUT - FILTER_VAR)
FILTER_VALIDADE_INT
FILTER_VALIDADE_EMAIL
FILTER_VALIDADE_FLOAT
FILTER_VALIDADE_IP
FILTER_VALIDADE_URL
*/

if (isset($_POST['enviarFormulario'])):
    // Array de erros
    $erros = array();

    // Validação Idade
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = 'Idade precisa ser um número inteiro!';
    endif;
    // Validação E-mail
    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = 'E-mail precisa ser um e-mail válido!';
    endif;
    // Validação Peso
    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = 'Peso precisa ser um número decimal!';
    endif;
    // Validação IP
    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = 'IP precisa ser o número do seu IP!';
    endif;
    // Validação URL
    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = 'URL precisa ser uma URL válida!';
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
        Idade: <input type="text" name="idade" id="idadeId"><br>
        E-mail: <input type="email" name="email" id="emailId"><br>
        Peso: <input type="text" name="peso" id="pesoId"><br>
        IP: <input type="text" name="ip" id="ipId"><br>
        URL: <input type="text" name="url" id="urlId">
        <button type="submit" name="enviarFomulario">Enviar</button>
    </form>
</body>
</html>