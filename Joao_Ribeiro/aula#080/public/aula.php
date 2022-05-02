<?php

    // Requerendo o arquivo config.php definido com as constantes do banco de dados
    require_once '..'.DIRECTORY_SEPARATOR.'config.php';
    
    // Classe PDO fazendo a conexão com o banco de dados
    $gestor = new PDO(
        "sqlsrv:Database=".TSQL_DATABASE."; 
        server=".TSQL_SERVER."; 
        ConnectionPooling=0", 
        TSQL_USER, 
        TSQL_PASSWORD
    );
    // Vale ressaltar que o banco de dados que eu utilizo é o Microsoft SQL Server e para conseguir a conexão com o banco, tive que fazer vários testes até conseguir.
    
    // $gestor = new PDO("sqlsrv:Database=loja; server=OLIVER\SQLEXPRESS; ConnectionPooling=0", "teknisa", "teknisa");

    // Instruções para o CRUD
    // Vamos aplicar o CRUD de forma superficial e sem preocupações com a segurança.
    // Apenas para exemplificação, conhecimento e familiarização com as funções do CRUD
    // Posteriormente iremos nos preocupar com a segurança

    // // CREATE - INSERT
    // $gestor->query("INSERT INTO CLIENTES VALUES ('FRANCISCO')");
    
    // // READ - SELECT
    // $clientes = $gestor->query("SELECT * FROM CLIENTES")->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // print_r($clientes);

    // // UPDATE - UPDATE
    // $gestor->query("UPDATE CLIENTES SET NOME = 'ANTÔNIO MANUEL' WHERE ID_CLIENTE = 4 ");

    // // DELETE - DELETE
    // $gestor->query("DELETE FROM CLIENTES WHERE ID_CLIENTE = 4");

?>