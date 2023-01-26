<?php

    function trataName($nome){
        if (!$nome){
            throw new Exception("Nenhum nome foi informado."."<br>", 1);
        }

        echo ucfirst($nome)."<br>";
    }

    try {
        trataName("Joao");
        trataName("");
        trataName("Paulo");
    } catch (Exception $e){
        echo $e->getMessage();
    } finally {
        echo "Excecutou o bloco Try!";
    }

?>