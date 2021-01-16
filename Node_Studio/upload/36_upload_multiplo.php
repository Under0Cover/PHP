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
        $quantidaArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

        // ADICIONANDO UM WHILE PARA UPLOADS MÚLTIPLOS
        while ($contador < $quantidaArquivos):

            $extensao = pachinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

            if(in_array($extensao, $formatosPermitidos)):

                $pasta = 'arquivos/';
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                $novoNomeArquivo = uniqid().".$extensao";

                if(move_uploaded_file($temporario, $pasta.$novoNomeArquivo)):
                    echo `Upload feito com sucesso para $pasta$novoNomeArquivo.<br>`;
                else:
                    echo `Erro ao enviar o arquivo $temporario<br>`;
            else:
                echo `$extensao não é permitida!<br>`;
            endif;
        $contador++;
        endwhile;

    endif;

?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" id="arquivoId" multiple><br>
        <input type="submit" names="enviarFomulario">
    </form>

</body>
</html>