<?php
    /*
        No curso, o instrutor se utiliza do MySQL como banco de dados.
        No meu contexto profissional, eu utilizo o SQL Server.
        Por esse motivo, vou reescrever o arquivo conforme meus conhecimentos e as necessidades do curso.
    */
    
    // A partir de agora, eu vou tentar reescrever o arquivo que o Instrutor disponibilizou, mas tentando fazer todas as conexões e configuraçções relacionadas ao SQL Server

    // Apenas fizrando o que o Instrutor propõe nestas aulas: Reutilização dos códigos.

    /*
    |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    | PDOFacil
    |
    |   Uma classe para simplificar o processo de conexão e comunicação com o banco de dados via PDO (PHP Data Object)
    |   
    |   @package        PDOFacil
    |   @author         Tales Oliver
    |   @version        1.0.0
    |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    */

    namespace PDOFacil;

    define('TSQL_SERVER', 'OLIVER\SQLEXPRESS');
    define('TSQL_DATABASE', 'loja');
    define('TSQL_USER', 'teknisa');
    define('TSQL_PASSWORD', 'teknisa');


    use PDO;

    class PDOFacil{
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // PROPRIEDADES DA CONEXÃO
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        private $localBancoDados = 'OLVIER\SQLSERVER';
        private $nomeBancoDados = 'loja';
        private $usuarioBancoDados = 'teknisa';
        private $senhaBancoDados = 'tekisa';
        private $charsetBancoDados = 'utf8';
        
    }
    
?>