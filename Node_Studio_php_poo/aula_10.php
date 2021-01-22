<?php
// Métodos e Atributos estáticos

class Login {
	public static $user;
	
	public static function verificarLogin() {
		// O $this não funciona em com membros estáticos
		echo "O usuário ".self::$user." está logado!";
	}
	
	public function sairSistema() {
		echo "O usuário ".self::$user." está deslogado!";
	}
}

// Quando o método estático é utilizado, não tem que fazer a instância da classe
// $usuario = new Login();

// Basta apenas declarar o nome da classe e chamar o método
// Login::verificarLogin();

// Para atribuir um valor ao atríbuto estático basta seguir a mesma ideia
Login::$user = 'admin';

Login::verificarLogin();

echo '<hr>';

$logar = new Login();
$logar->sairSistema();

echo '<hr>';

?>