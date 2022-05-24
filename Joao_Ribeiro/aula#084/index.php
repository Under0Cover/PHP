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

    // $cliente = $gestor->select("SELECT * FROM CLIENTES");
    // Ainda não é possível fazer o select pois não existe ainda no PDOFacil.

    // Tratativa necessária para trazer o resultado (ainda utilizando a classe PDO e a Conexão mais simples do SQL Server): 
    $consulta = $gestor_antigo->query("SELECT * FROM CLIENTES");
    $clientes = $consulta->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($clientes);
?>