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
    |   @version        1.0.1
    |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    */

    namespace PDOFacil;

    use PDO;
    
    class PDOFacil{
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // PROPRIEDADES DA CONEXÃO NVOA
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        // private $localBancoDados = 'OLVIER\SQLSERVER';
        // private $nomeBancoDados = 'loja';
        // private $usuarioBancoDados = 'teknisa';
        // private $senhaBancoDados = 'tekisa';
        // private $charsetBancoDados = 'utf8';

        public function __construct(array $opcoes = []){

            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            // Verifica se o desenvolvedor define outro tipo de conexão com o banco de dados.
            if (key_exists('localBancoDados', $opcoes)) $this->localBancoDados = $opcoes['localBancoDados'];
            if (key_exists('nomeBancoDados', $opcoes)) $this->nomeBancoDados = $opcoes['nomeBancoDados'];
            if (key_exists('usuarioBancoDados', $opcoes)) $this->usuarioBancoDados = $opcoes['usuarioBancoDados'];            
            if (key_exists('senhaBancoDados', $opcoes)) $this->senhaBancoDados = $opcoes['senhaBancoDados'];
            if (key_exists('charsetBancoDados', $opcoes)) $this->charsetBancoDados = $opcoes['charsetBancoDados'];
            
        }
        
    }
    
?>