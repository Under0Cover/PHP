<?php

    /*
        Antes de assistir a aula...
            A comunicação com o banco de dados na Classe PDOFacil está estabelecida.
            O Insert também está configurado.

            As outras instruções SQL estão configuradas e nessa aula será testadas as funcionalidades.
            Erros e problemas serão corrigidos
    */
    use PDOFacil\PDOFacil;

    require_once('libs'.DIRECTORY_SEPARATOR.'PDOFacil.php');
    require_once('configs'.DIRECTORY_SEPARATOR.'config.php');

    // A forma de trazer a conexão com o banco de dados, quando utiliza mais de um banco
    $gestor = new PDOFacil(CONEXAO_ANTIGA);

    // // UPDATE
    // $parametros = [
    //     ':nome' => 'CRISTINA',
    //     ':id' => '6'
    // ];

    // $gestor->update("UPDATE CLIENTES SET NOME = :nome WHERE ID_CLIENTE = :id", $parametros);

    // // DELETE
    //     // Forma diferente de fazer a query. passando os parâmetros diretamente
    // $gestor->delete("DELETE FROM CLIENTES WHERE ID_CLIENTE = :ID", [':ID' => 7]);
    // $gestor->query("DELETE FROM CLIENTES WHERE ID_CLIENTE = :ID", [':ID' => 6]);

    // SELECT
    $consulta = $gestor->select("SELECT * FROM CLIENTES");
    echo '<pre>';
    print_r($consulta);

?>