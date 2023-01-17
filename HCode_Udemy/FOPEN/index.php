<?php

    $file = fopen("log.txt", "a+");

    fwrite($file, date("Y-m-d H:i:s")."\n\r");

    fclose($file);

    echo 'Arquivo criado com sucesso!';

?>