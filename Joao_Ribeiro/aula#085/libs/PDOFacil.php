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
    |   @version        1.0.2
    |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    */

    namespace PDOFacil;

    use PDO;
use PDOFacil\PDOFacil as PDOFacilPDOFacil;

    class PDOFacil{
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // PROPRIEDADES DA CONEXÃO NVOA
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        private $localBancoDados = '';
        private $nomeBancoDados = '';
        private $usuarioBancoDados = '';
        private $senhaBancoDados = '';

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // OPÇÕES DA CLASSE
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        
        private $opcao_mostrar_erros = true;
        private $opcao_mostrar_avisos = true;
        private $opcao_atribuir_errmode = PDO::ERRMODE_WARNING;
        /*
            Tradução livre do php.net sobre o PDO::ATTR_ERRMODE:
                O PDO oferece a você uma escolha de 3 estratégias diferentes de tratamento de erros, para se adequar ao seu estilo de desenvolvimento de aplicativos.
                    PDO::ERRMODE_WARNING:
                        Além de definir o código de erro, o PDO emitirá uma mensagem E_WARNING tradicional. Essa configuração é útil durante a depuração/teste, se você quiser apenas ver quais problemas ocorreram sem interromper o fluxo do aplicativo.
        */
        private $opcao_nome_colunas_banco = PDO::CASE_NATURAL;
        /*
            Tradução livre do php.net sobre o PDO::ATTR_CASE:
                Forçar nomes de coluna para um caso específico. Pode assumir um dos seguintes valores:
                    PDO::CASE_NATURAL:
                        Deixe os nomes das colunas como retornados pelo driver do banco de dados.
        */
        private $opcao_converter_nulos_vazios = PDO::NULL_NATURAL;
        /*
            Tradução livre do php.net sobre o PDO::ATTR_ORACLE_NULLS:
                Nota: Este atributo está disponível para todos os drivers, não apenas para Oracle.
                Determina se e como strings nulas e vazias devem ser convertidas. Pode assumir um dos seguintes valores:
                    DOP::NULL_NATURAL:
                        Nenhuma conversão ocorre.
        */
        private $opcao_debuggar = true;
        private $opcao_retorno_linha = PDO::FETCH_ASSOC;
        /*
            Tradução livre do php.net sobre o PDOStatement::fetch:
                Busca uma linha de um conjunto de resultados associado a um objeto PDOStatement.
                O parâmetro mode determina como o PDO retorna a linha.
                    PDO::FETCH_ASSOC:
                        Retorna um array indexado pelo nome da coluna conforme retornado em seu conjunto de resultados
        */

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // PROPRIEDADES DA CLASSE
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        private $conexao;
        private $comando;
        public $linhasAfetadas;

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // FUNÇÕES
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        public function __construct(array $opcoes = []){

            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            // Verifica se o ambiente possuí compatibilidade com o PDO ou SQL Server
            $modulo = get_loaded_extensions();
            if (!in_array('PDO', $modulo) || !in_array('sqlsrv', $modulo)){
                die('PDO ou módulo SQL Server não está disponível!');
            }

            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            // Verifica se o desenvolvedor define outro tipo de conexão com o banco de dados.
            if (key_exists('localBancoDados', $opcoes)) $this->localBancoDados = $opcoes['localBancoDados'];
            if (key_exists('nomeBancoDados', $opcoes)) $this->nomeBancoDados = $opcoes['nomeBancoDados'];
            if (key_exists('usuarioBancoDados', $opcoes)) $this->usuarioBancoDados = $opcoes['usuarioBancoDados'];            
            if (key_exists('senhaBancoDados', $opcoes)) $this->senhaBancoDados = $opcoes['senhaBancoDados'];

            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            // Verifica se as opções de conexão com o banco de dados são válidas
            // if (empty($this->localBancoDados)) $this->error('Instância do SQL Server não declarada!');
            // if (empty($this->nomeBancoDados)) $this->error('Nome do banco de dados não declarado!');
            // if (empty($this->usuarioBancoDados)) $this->error('Nome do usuário do banco de dados não declarado!');
            // if (empty($this->senhaBancoDados)) $this->warning('A senha do usuário do banco de dados não está definida!');

            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            // Conexão
            $informacoes_banco = 
                "sqlsrv:Database={$this->nomeBancoDados};
                server={$this->localBancoDados}";


            $this->conexao = new PDO(
                $informacoes_banco,
                $this->usuarioBancoDados, 
                $this->senhaBancoDados
                // array(PDO::ATTR_PERSISTENT => true)
                /*
                    O valor da opção PDO::ATTR_PERSISTENT é convertido para bool (ativar/desativar conexões persistentes), a menos que seja uma string não numérica, caso em que permite usar vários conjuntos de conexões persistentes. 
                    Isso é útil se conexões diferentes usam configurações incompatíveis, por exemplo, valores diferentes de PDO::MYSQL_ATTR_USE_BUFFERED_QUERY.
                    Nota:
                        Se você deseja usar conexões persistentes, você deve definir PDO::ATTR_PERSISTENT na matriz de opções de driver passadas para o construtor PDO. 
                        Se definir este atributo com PDO::setAttribute() após a instanciação do objeto, o driver não usará conexões persistentes.

                */
            );

            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            // Setando atributos
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, $this->opcao_atribuir_errmode);
            // print_r($this->conexao->getAttribute(PDO::ATTR_ERRMODE));
            $this->conexao->setAttribute(PDO::ATTR_CASE, $this->opcao_nome_colunas_banco);
            // print_r($this->conexao->getAttribute(PDO::ATTR_CASE));
            $this->conexao->setAttribute(PDO::ATTR_ORACLE_NULLS, $this->opcao_converter_nulos_vazios);
            // print_r($this->conexao->getAttribute(PDO::ATTR_ORACLE_NULLS));

        }

        public function insert($query, $parametros = null){

            // Roda a query de inserção
            // if (!preg_match("/^INSERT/i", trim($query))){
            //     $this-error('Não é uma preparação de inserção ao SQL Server');
            //     return null;
            // }

            $comando = null;
            
            // Execução da query
            try {
                $comando = $this->conexao->prepare($query);
                if ($parametros != null) {
                    $comando->execute($parametros);
                } else {
                    $comando->execute();
                }
            } catch (\PDOException $e){
                $this->linhasAfetadas = 0;
            }
        }
        
    }
    
?>