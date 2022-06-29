<?php
    /*
        No curso, o instrutor se utiliza do MySQL como banco de dados.
        No meu contexto profissional, eu utilizo o SQL Server.
        Por esse motivo, vou reescrever o arquivo conforme meus conhecimentos e as necessidades do curso.
    */
    
    /*
    |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    | PDOFacil
    |
    |   Uma classe para simplificar o processo de conexão e comunicação com o banco de dados via PDO (PHP Data Object)
    |   
    |   @package        PDOFacil
    |   @author         Tales Oliver
    |   @version        1.0.3
    |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    */

    namespace PDOFacil;

    use PDO;

    class PDOFacil{
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // VERIFICANDO DISPONIBILIDADE DE DRIVERS
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        public function bancos_dados_disponiveis(){
            // Exibindo os Drivers PDO habilitados 
            echo '<pre>';
            print_r(PDO::getAvailableDrivers());
        }

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
        public $linhasAfetadas = 0;

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
            if (empty($this->localBancoDados)) $this->erro('Instância do SQL Server não declarada!');
            if (empty($this->nomeBancoDados)) $this->erro('Nome do banco de dados não declarado!');
            if (empty($this->usuarioBancoDados)) $this->erro('Nome do usuário do banco de dados não declarado!');
            if (empty($this->senhaBancoDados)) $this->aviso('A senha do usuário do banco de dados não está definida!');

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
            $this->conexao->setAttribute(PDO::ATTR_CASE, $this->opcao_nome_colunas_banco);
            $this->conexao->setAttribute(PDO::ATTR_ORACLE_NULLS, $this->opcao_converter_nulos_vazios);

        }

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // MÉTODOS CRUD GENÉRICOS
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        public function select($query, $parametros = null, $classe = null){
            // Roda a query de SELECT
            if (!preg_match("/^SELECT/i", trim($query))){
                $this->erro("Não é uma preparação de SELECT ao SQL Server.");
                return null;
            }

            $resultado = null;
            $comando = null;

            // Execução da Query
            try{
                $comando = $this->conexao->prepare($query);
                if ($parametros != null) {
                    $comando->execute($parametros);
                } else {
                    $comando->execute();
                }

                // FETCH ASSOC ARRAY
                if ($this->opcao_retorno_linha == PDO::FETCH_ASSOC && $classe == null){
                    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
                } else if ($this->opcao_retorno_linha == PDO::FETCH_OBJ && $classe == null){
                    $resultado = $comando->fetchAll(PDO::FETCH_OBJ);
                } else if ($classe != null){
                    if (!class_exists($classe)) {
                        if ($classe == null){
                            $this->erro("Erro de Banco de Dados: Nenhuma Classe específicada.");
                        } else {
                            $this->erro("Erro de Banco de Dados: Classe '$classe' não existe.");
                        }
                        $this->linhasAfetadas == 0;
                        return null;
                    } else {
                        $resultado = $comando->fetchAll(PDO::FETCH_CLASS, $classe);
                    }
                }

            } catch (\PDOException $e){
                $this->linhasAfetadas = 0;
                $this->erro($e->getMessage());
                return null;
            }
            
            // Linhas Afetadas
            $this->linhasAfetadas = $comando->rowCount();

            // Fechando Conexão
            $this->conexao = null;

            // Retorno
            return $resultado;
        }

        public function insert($query, $parametros = null){

            // Roda a query de inserção
            if (!preg_match("/^INSERT/i", trim($query))){
                $this->erro('Não é uma preparação de INSERT ao SQL Server.');
                return null;
            }

            $comando = null;
            
            // Execução da Query
            try {
                $comando = $this->conexao->prepare($query);
                if ($parametros != null) {
                    $comando->execute($parametros);
                } else {
                    $comando->execute();
                }
            } catch (\PDOException $e){
                $this->linhasAfetadas = 0;
                $this->erro($e->getMessage());
                return null;
            }

            // Linhas afetadas
            $this->linhasAfetadas = $comando->rowCount();

            // Fechando conexão
            $this->conexao = null;
        }

        public function update($query, $parametros = null){
            // Roda a query de update
            if(!preg_match("/^UPDATE/i", trim($query))){
                $this->erro('Não é uma preparação de UPDATE ao SQL Server.');
                return null;
            }

            $comando = null;

            // Execução da Query
            try{
                $comando = $this->conexao->prepare($query);
                if($parametros != null){
                    $comando->execute($parametros);
                } else {
                    $comando->execute();
                }
            } catch (\PDOException $e){
                $this->linhasAfetadas = 0;
                $this->erro($e->getMessage());
                return null;
            }

            // Linhas afetadas
            $this->linhasAfetadas = $comando->rowCount();

            // Fechando conexão
            $this->conexao = null;
        }

        public function delete($query, $parametros = null){
            // Roda a query de delete
            if(!preg_match("/^DELETE/i", trim($query))){
                $this->erro('Não é uma preparação de DELETE ao SQL Server.');
                return null;
            }

            $comando = null;

            // Execução da query
            try{
                $comando = $this->conexao->prepare($query);
                if($parametros != null){
                    $comando->execute($parametros);
                } else {
                    $comando->execute();
                }
            } catch (\PDOException $e){
                $this->linhasAfetadas = 0;
                $this->erro($e->getMessage());
                return null;
            }

            // Linhas afetadas
            $this->linhasAfetadas = $comando->rowCount();

            // Fechando conexão
            $this->conexao = null;
        }

        public function select_comeco($query, $parametros = null){
            // Executa uma query SELECT, com uma linha de cada vez, prepatada com FETCH
            if(!preg_match("/^SELECT/i", trim($query))){
                $this->erro("Não é uma preparação SELECT ao SQL Server");
                return null;
            }

            // Execução da query
            try{
                $this->comando - $this->conexao->prepare($query);
                if($parametros != null){
                    $this->comando->execute($parametros);
                } else {
                    $this->comando->execute();
                }
            } catch (\PDOException $e){
                $this->comando = null;
                $this->erro($e->getMessage());
                return null;
            }
        }

        public function select_proxima_linha($classe = null){
            // Obtém a próxima linha da consulta gerada em "select_comeco"
            if(!isset($this->conexao) || !isset($this->comando) || is_null($this->comando)){
                $this->erro("Não foi possível retornar a próxima linha da consulta no SQL Server");
                return null;
            }

            if($this->opcao_retorno_linha == PDO::FETCH_ASSOC && $classe == null){
                return $this->comando->fetch(PDO::FETCH_ASSOC);
            } elseif ($this-> opcao_retorno_linha == PDO::FETCH_OBJ && $classe == null){
                return $this->comando->fetch(PDO::FETCH_OBJ);
            } elseif ($classe != null){
                if (!class_exists($classe)){
                    if ($classe == null){
                        $this->erro("Erro no Banco de Dados: Nenhuma Classe Específicada!");
                    } else {
                        $this->erro("Erro no Banco de Dados: A Classe '$classe' não existe!");
                    }
                    $this->linhasAfetadas = 0;
                    return null;
                } else {
                    return $this->comando->fetchObject($classe);
                }
            }
        }

        public function select_end(){
            // Desabilata o $comando
            $this->comando = null;
        }

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // MÉTODO GENÉRICO QUERY
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        public function query($query, $parametros = null, $classe = null) {
            // Executando uma query genérica
            if(preg_match("/^SELECT/i", trim($query))){
                return $this->select($query, $parametros, $classe);
            } else if(preg_match("/^INSERT/i", trim($query))){
                return $this->insert($query, $parametros);
            } else if(preg_match("/^UPDATE/i", trim($query))){
                return $this->update($query, $parametros);
            } else if(preg_match("/^DELETE/i", trim($query))){
                return $this->delete($query, $parametros);
            } else {
                $comando = null;
                try {
                    $comando = $this->conexao->prepare($query);
                    if ($parametros != null) {
                        $comando->execute($parametros);
                    } else {
                        $comando->execute();
                    }
                } catch (\PDOException $e) {
                    $this->linhasAfetadas = 0;
                    $this->erro($e->getMessage());
                    return null;
                }
        
                // Linhas Afetadas
                $this->linhasAfetadas = $comando->rowCount();
        
                // Encerrando conexão
                $this->conexao = null;

            }

        }

        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        // ERROS E AVISOS
        //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        private function erro($mensagem){
            // Tratamento erros graves
            if(!$this->opcao_debuggar) return;
            if(!$this->opcao_mostrar_avisos) return;

            $nome_classe = explode('\\', __CLASS__);
            $teste = __CLASS__;
            echo '<pre>';
            var_dump($nome_classe);
            echo '<hr>';
            var_dump($teste);
            echo '</pre>';
            $nome_classe = end($nome_classe);

            die(PHP_EOL . "$nome_classe - ::ERRO:: - $mensagem" . PHP_EOL);
        }

        private function aviso($mensagem){
            // Tratamento de avisos
            if(!$this->opcao_debuggar) return;
            if(!$this->opcao_mostrar_avisos) return;

            $nome_classe = explode('\\', __CLASS__);
            $nome_classe = end($nome_classe);

            die(PHP_EOL . "$nome_classe - ::AVISO:: - $mensagem" . PHP_EOL);
        }
        
    }
    
?>