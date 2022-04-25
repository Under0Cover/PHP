<?php
    echo '<pre>';
    print_r($_FILES);

    // MOVER FICHEIRO PARA O DESTINO FINAL
    // move_uploaded_file($_FILES['caixa_ficheiro']['tmp_name'], "C:".DIRECTORY_SEPARATOR."temp".DIRECTORY_SEPARATOR.$_FILES['caixa_ficheiro']['name']);

    // Destino final é "C:/temp"
    $pasta_final = 'C:'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

    $ficheiros_aceitos = [
        'image/png',
        'image/jpeg'
    ];

    // Tratamento dos ficheiros
    foreach($_FILES as $file){
        // verifica se a imagem é do tipo esperado
        if(in_array($file['type'], $ficheiros_aceitos)){
            continue;
        }

        // mover o ficheiro para o destino final
        move_uploaded_file($file['tmp_name'], $pasta_final.$file['name']);
    }
?>