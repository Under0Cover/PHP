<?php

    if (isset($_COOKIE['NOME_COOKIE'])){
        var_dump(json_decode($_COOKIE['NOME_COOKIE'], true));
    }

?>