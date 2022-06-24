<?php

    /*
        Antes de assistir a aula...
            A comunicação com o banco de dados na Classe PDOFacil está estabelecida.
            O Insert também está configurado.

            O Select ainda está sendo feito pela forma antiga de conexão, pois a Classe PDOFacil ainda não possuí as outras 3 funções do 'CRUD'
            Entretanto, eu vou fechar a conexão antiga
    */
    use PDOFacil\PDOFacil;

    require_once('libs'.DIRECTORY_SEPARATOR.'PDOFacil.php');
    require_once('configs'.DIRECTORY_SEPARATOR.'config.php');

    // A forma de trazer a conexão com o banco de dados, quando utiliza mais de um banco
    $gestor = new PDOFacil(CONEXAO_ANTIGA);

    // Sequência da aula - UPDATE
    $parametros = [
        ':nome' => 'CRISTINA',
        ':id' => '6'
    ];

    // $gestor->insert("UPDATE CLIENTES SET NOME = :nome WHERE ID_CLIENTE = :id", $parametros);

    
?>