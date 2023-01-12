<?php

    spl_autoload_register(function($nomeClasse){
        $nomeArquivo = $nomeClasse.'.php';
        if (file_exists($nomeArquivo)){
            require_once $nomeArquivo;
        }
    });

?>