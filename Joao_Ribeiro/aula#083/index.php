<?php

    require_once('libs'.DIRECTORY_SEPARATOR.'PDOFacil.php');

    $gestor = new PDO(
        "sqlsrv:Database=".TSQL_DATABASE."; 
        server=".TSQL_SERVER."; 
        ConnectionPooling=0", 
        TSQL_USER, 
        TSQL_PASSWORD
    );

?>