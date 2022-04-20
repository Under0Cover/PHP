<?php

    echo '<pre>';
    print_r($_POST);

    if(empty($_POST['nome'])){
        echo 'O nome está vazio!';
    }
?>