<?php

    $pasta = 'images';

    if (!is_dir($pasta)) {
        mkdir($pasta);
    }

    foreach (scandir($pasta) as $item) {
        if (!in_array($item, array('.', '..'))) {
            unlink($pasta.DIRECTORY_SEPARATOR.$item);
        }
    }

    echo 'OK!';

?>