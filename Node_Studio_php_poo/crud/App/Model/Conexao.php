<?php

// Definindo namespaces
namespace App\Model;

class Conexao {
	// Essa clase é a responsável por estabelecer a conexão com o Banco de Dados
	// Padrão singleton 
	private static $instance;
	
	public static function getConn() {
		if (!isset(self::$instance)):
			self::$instance = new \PDO ('mysql:host=localhost; dbname=pdo; charset=uft8.','root',' ');
		endif;
		
		return self::$intance;
	}
	
}

?>