<?php
// CONSTRUCTOR

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }
	
	public function getNome() {
		return $this->nome;
	}
	
	public function getEmail() {
		return $this->email;
	}

	public function setEmail($emailUsuario) {
		$email = filter_var($emailUsuario, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}
	
	public function getSenha() {
		return $this->senha;
	}
	
	public function setSenha($senhaUsuario) {
		$this->senha = $senhaUsuario;
	}
	
	public function Logar() {
		if ($this->email == 'teste@teste.com' and $this->senha == '123456'):
            echo 'Logado com sucesso!';
        else:
            echo 'Dados inválidos!';
        endif;
    }
}

$logar = new Login('teste@teste.com', '123456', 'Tales Oliver');
$logar ->Logar();
echo '<br>';
echo $logar->getEmail();
echo '<br>';
echo $logar->getSenha();
echo '<br>';
echo $logar->getNome();

?>