<?php
// GETTERS E SETTERS

class Login {
    public $email;
    public $senha;

    public function Logar() {
        if ($this->email == 'teste@teste.com' and $this->senha == '123456'):
            echo 'Logado com sucesso!';
        else:
            echo 'Dados inválidos!';
        endif;
    }
}

$logar = new Login();
$logar -> email = 'teste@teste.com';
$logar -> senha = '123456';
$logar -> Logar();
echo '<hr>';

// Utilizando a forma mais correta de ser feita
class Acesso {
    private $email;
    private $senha;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($emailUsuario) {
        $filtroEmail = filter_var($emailUsuario, FILTER_SANITIZE_EMAIL);
        $this->email = $filtroEmail;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senhaUsuario) {
        $this->senha = $senhaUsuario;
    }

    public function Logando() {
        if ($this->email == 'teste@teste.com' and $this->senha == '123456'):
            echo 'Logado com sucesso!';
        else:
            echo 'Dados inválidos!';
        endif;
    }
}

$logar = new Acesso();
$logar -> setEmail('teste@teste.com');
$logar -> setSenha('123456');
$logar -> Logando();
echo '<hr>';

echo $logar->getEmail();
echo '<br>';
echo $logar->getSenha();
?>