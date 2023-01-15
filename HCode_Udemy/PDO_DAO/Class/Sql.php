<?php

    class Sql extends PDO {

        public $conexao;
        
        public function __construct(){
            $this->conexao = new PDO("mysql:host=localhost; dbname=db_php7", "root", "");
        }

        public function setParametro($stmt, $chave, $valor){
            $stmt->bindParam($chave, $valor);
        }

        public function setandoParametros($stmt, $parametros = array()){
            foreach ($parametros as $chave => $valor) {
                $this->setParametro($stmt, $chave, $valor);
            }
        }

        public function consulta($consulta, $parametros = array()):object{
            $stmt = $this->conexao->prepare($consulta);
            $this->setandoParametros($stmt, $parametros);
            $stmt->execute();
            return $stmt;
        }

        public function selecionando($consulta, $parametros = array()):array{
            $stmt = $this->consulta($consulta, $parametros);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }

?>