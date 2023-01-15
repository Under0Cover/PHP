<?php

    class Usuario {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        // CONSTRUCT
        public function __construct($login = null, $senha = null){
            $this->setaDesLogin($login);
            $this->setaDesSenha($senha);
        }

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

        public function setandoDados($dados){
            $this->setaIdUsuario($dados['idusuario']);
            $this->setaDesLogin($dados['deslogin']);
            $this->setaDesSenha($dados['dessenha']);
            $this->setaDtCadastro(new DateTime($dados['dtcadastro']));
        }

        public function carregarPeloId($id){
            $sql = new Sql;
            $resultado = $sql->selecionando("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
                "ID" => $id
            ));

            if (count($resultado) > 0){
                $linhaRetorno = $resultado[0];
                $this->setandoDados($linhaRetorno);
            }
        }

        public static function pegaLista(){
            $sql = new Sql();
            return $sql->selecionando("SELECT * FROM tb_usuarios ORDER BY idusuario");
        }

        public static function buscarUsuario($login){
            $sql = new Sql();
            return $sql->selecionando("SELECT * FROM tb_usuarios WHERE deslogin LIKE :PROCURA ORDER BY idusuario", array(
                ':PROCURA'=>"%".$login."%"
            ));
        }

        public function login($login, $senha){
            $sql = new Sql;
            $resultado = $sql->selecionando("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(
                ':LOGIN'    =>  $login,
                ':SENHA'    =>  $senha
            ));

            if (count($resultado) > 0){
                $linhaRetorno = $resultado[0];
                $this->setandoDados($linhaRetorno);
            } else {
                throw new Exception('Login e/ou senha inválidos!');
            }
        }

        public function inserindo(){
            $sql = new Sql();
            $resultado = $sql->selecionando("CALL sp_usuarios_inserindo(:LOGIN, :SENHA)", array(
                ':LOGIN'    =>  $this->pegaDesLogin(),
                ':SENHA'    =>  $this->pegaDesSenha()
            ));

            if (count($resultado) > 0){
                $linhaRetorno = $resultado[0];
                $this->setandoDados($linhaRetorno);
            }
        }

        public function atualizarCadastro($login, $senha){
            $this->setaDesLogin($login);
            $this->setaDesSenha($senha);

            $sql = new Sql();
            $sql->consulta("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID", array(
                ':LOGIN'    =>  $this->pegaDesLogin(),
                ':SENHA'    =>  $this->pegaDesSenha(),
                ':ID'       =>  $this->pegaIdUsuario()
            ));
        }

        public function __toString(){
            return json_encode(array(
                "idusuario"     =>  $this->pegaIdUsuario(),
                "deslogin"      =>  $this->pegaDesLogin(),
                "dessenha"      =>  $this->pegaDesSenha(),
                "dtcadastro"    =>  $this->pegaDtCadastro()
            ));
        }

    }

?>