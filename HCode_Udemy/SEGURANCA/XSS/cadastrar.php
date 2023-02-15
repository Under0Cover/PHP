<?php

    if(isset($_POST['busca'])){
        //echo strip_tags($_POST['busca']);
        echo htmlentities($_POST['busca']);
    }

?>