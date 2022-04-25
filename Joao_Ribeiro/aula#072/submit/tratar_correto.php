<?php
    echo '<pre>';
    print_r($_FILES);

    // MOVER FICHEIRO PARA O DESTINO FINAL
    move_uploaded_file($_FILES['caixa_ficheiro']['tmp_name'], "C:".DIRECTORY_SEPARATOR."temp".DIRECTORY_SEPARATOR.$_FILES['caixa_ficheiro']['name']);
?>