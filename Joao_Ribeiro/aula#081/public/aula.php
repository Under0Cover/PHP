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
    
    // Utilização de queries parametrizadas (Segurança contra SQL Injection)


    /*
        Exemplo feito na tele aula com modificações pontuais para o funcionamento no SQL Server
        Na tele aula, o instrutor adiciona o primeiro paramêtro "0", mas no SQL Server com esse paramêtro adicionado, não há a execução da query
    */
    /*
        // Primeira forma de fazer a inserção
        $nome_do_cliente = "Carlos Silva";

        $comando = $gestor->prepare("INSERT INTO CLIENTES VALUES (?)");
        $comando->execute([$nome_do_cliente]);
    */

        // Segunda forma de fazer a inserção
        $nome_do_cliente = "Joaquim José";
        $comando = $gestor->prepare("INSERT INTO CLIENTES VALUES (:nome)");
        $comando->execute(
            [
                ':nome' => $nome_do_cliente
                /*
                    No 'nome' podem ser adicionados os dois pontos ou não
                    Nessa segunda forma, fica mais fácil a visualização dos paramêtros passados para a query
                    Visto que todos os paramêtros estarão nomeados
                */
            ]
        );


?>