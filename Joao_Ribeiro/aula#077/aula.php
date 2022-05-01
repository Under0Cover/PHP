<?php
    
    $gestor = new PDO("sqlsrv:Database=loja; server=OLIVER\SQLEXPRESS; ConnectionPooling=0", "teknisa", "teknisa");
    $dados = $gestor->query("SELECT * FROM CLIENTES");
    $clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($clientes);
    
?>