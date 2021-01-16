<?php
// Botão de Enviar
if(isset($_POST['botaoEntrar'])):
    $erros = array();
    $login = msqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo Login e Senha precisam ser preenchidos!</li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            if (mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close();
                $_SESSION['logado'] = true;
                $_SESSION['id'] = $dados['id'];
                header('Location: home.php');
            else:
                $erros[] = "<li> Senha não confere com usário cadastrado!";
            endif;
        else:
            $erros[] = 'Login não confere na base de cadastros!';
        endif;
    endif;
endif;

// Conexão Banco de Dados
require_once 'db_connect.php';

// Sessão Iniciada
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <h1>Login</h1>
    <!-- VERIFICAÇÃO DE ERROS EXISTENTES -->
    <?php
    if (!empty($erros)):
        foreach ($erros as $erro):
            echo $erro;
        endforeach;
    ?>
    <!-- FORMULÁRIO DE LOGIN -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Login: <input type="text" name="login" id="loginID"><br>
        Senha: <input type="password" name="senha" id="senhaID"><br>
        <button type="submit" name="botaoEntrar">Entrar</button>
    </form>
</body>
</html>