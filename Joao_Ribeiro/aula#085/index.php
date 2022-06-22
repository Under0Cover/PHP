<?php

    use PDOFacil\PDOFacil;

    require_once('libs'.DIRECTORY_SEPARATOR.'PDOFacil.php');
    require_once('configs'.DIRECTORY_SEPARATOR.'config.php');

    // A forma de trazer a conexão com o banco de dados, quando utiliza mais de um banco
    $gestor = new PDOFacil(CONEXAO_ANTIGA);

    /*
        O exemplo abaixo ainda está sendo utilizado como forma de manter a conexão com o banco SQL Server.
        Apesar de estar criando uma nova classe de PDO, algumas coisas ainda não foram definidas, como nas aulas, pois os bancos de dados utilizados são diferentes e a configuração do PHP não é a mesma com bancos de dados diferentes.
        E eu não consigo atribuir o array $opcoes na classe PDO Original, pois na classe PDO Original não existe essa opção na classe __construct
        Definir o array $opcoes na classe PDO Original não me parece vantajoso. Já que é pra fazer, vou fazer na que eu já estou fazendo...
    */
    $gestor_antigo = new PDO("sqlsrv:Database=loja; server=OLIVER\SQLEXPRESS; ConnectionPooling=0", "teknisa", "teknisa");

    // Sequência da aula
    $nome_cliente = 'Carlos Antônio';
    // $gestor->insert("INSERT INTO CLIENTE VALUES ($nome_cliente)");
    // Ainda não exist o método insert na classe PDOFacil

    // Forma direta de inserção de dados utilizando a classe PDO Original. Apenas para a sequência do aprendizado e atualização das informações no banco de dados.
    // $gestor_antigo->query("INSERT INTO CLIENTES VALUES ('FRANCISCO')");

    // Forma segura de fazer a inserção de dados utilizando a PDOFacil
    $parametros = [
        ':nome' => $nome_cliente
    ];

    $gestor->insert("INSERT INTO CLIENTES VALUES (:nome)", $parametros);
    /*
        A utilização desse comando, neste momento, vai retornar um erro.
        Esse erro é a não declaração do comando 'prepare'.
        Esse comando, assim como os próximos, realmente ainda não estão definidos.
        A declaração da classe PDO Original não está sendo utilizada ainda
    */
    
    echo '<hr>';
    // Tratativa necessária para trazer o resultado (ainda utilizando a classe PDO e a Conexão mais simples do SQL Server): 
    $consulta = $gestor_antigo->query("SELECT * FROM CLIENTES");
    $clientes = $consulta->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($clientes);
?>