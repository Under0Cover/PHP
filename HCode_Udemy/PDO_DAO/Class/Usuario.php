<?php

    class Usuario {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        // GETTERS E SETTERS
        public function pegaIdUsuario(){
            return $this->idusuario;
        }

        public function setaIdUsuario($valor){
            $this->idusuario = $valor;
        }

        public function pegaDesLogin(){
            return $this->deslogin;
        }

        public function setaDesLogin($valor){
            $this->deslogin = $valor;
        }

        public function pegaDesSenha(){
            return $this->dessenha;
        }

        public function setaDesSenha($valor){
            $this->dessenha = $valor;
        }

        public function pegaDtCadastro(){
            return $this->dtcadastro;
        }

        public function setaDtCadastro($valor){
            $this->dtcadastro = $valor;
        }

        /*=========================================================================================================================*/
        // MÉTODOS

        public function carregarPeloId($id){
            $sql = new Sql;
            $resultado = $sql->selecionando("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
                "ID" => $id
            ));

            if (count($resultado) > 0){
                $linhaRetorno = $resultado[0];
                $this->setaIdUsuario($linhaRetorno['idusuario']);
                $this->setaDesLogin($linhaRetorno['deslogin']);
                $this->setaDesSenha($linhaRetorno['dessenha']);
                $this->setaDtCadastro(new DateTime($linhaRetorno['dtcadastro']));
            }
        }

        public function __toString(){
            return json_encode(array(
                "idusuario"     =>  $this->pegaIdUsuario(),
                "deslogin"      =>  $this->pegaDesLogin(),
                "dessenha"      =>  $this->pegaDesSenha(),
                "dtcadastro"    =>  $this->pegaDtCadastro()->format("d/m/Y H:i:s")
            ));
        }

    }

?>