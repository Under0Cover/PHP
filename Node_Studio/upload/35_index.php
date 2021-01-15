<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Arquivos</title>
</head>
<body>
<?php
    if(isset($_POST['enviarFormulario'])):
        $formatosPermitidos = array('png', 'jpeg', 'jpg', 'gif');
        $extensao = pachinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        if(in_array($extensao, $formatosPermitidos)):
            $pasta = 'arquivos/';
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNomeArquivo = uniqid().".$extensao";
            if (move_uploaded_file($temporario, $pasta.$novoNomeArquivo)):
                $mensagem = "Upload feito com sucesso!";
            else:
                $mensagem = "Erro, não foi possível fazer o Upload!";
            endif;
        else:
            $mensagem[] = 'Formato inválido!';
        endif;
        echo $mensagem;
    endif;
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo" id="arquivoId"><br>
        <input type="submit" names="enviarFomulario">
    </form>
</body>
</html>