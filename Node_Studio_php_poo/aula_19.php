<?php
// Métodos estáticos

// Classe Pessoa
class Pessoa {
	// Atríbuto privado
	private $nome;
	
	// Método público
	public function __set($nome, $valor) {
		$this->nome = $valor;
	}
	
	public function __get($nome) {
		return $this->nome;
	}
}

// Se você tentar instanciar a classe Pessoa
/*
	$pessoa = new Pessoa();
	$pessoa->nome = 'Danilo';
*/
// O Sistema retorna erro, pois a classe é privada
// Por isso vamos utilizar o método set dentro da classe

// Fazendo da mesma forma:
$pessoa = new Pessoa();
$pessoa->nome = 'Danilo';

// Vamos dar um var_dump pra ver a Classe
// var_dump($pessoa);

// Como pode ver, o nome 'Danilo' foi atríbuido corretamente
// Pórem, se der um echo em nome, dá erro, pois $nome é um atríbuto privado
/*
	echo $pessoa->nome;
*/

// Para poder dar echo, vamos ter de voltar a Classe Pessoa e utilizar o __get
// Depois do __get podemos dar o echo normalmente
echo $pessoa->nome;

echo '<hr>';

// Classe Pessoas com array
class Pessoas {
	// Atríbuto privado
	private $dados = array();
	
	// Método público
	public function __set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}
	
	public function __get($nome) {
		return $this->dados[$nome];
	}
	
	public function __tostring() {
		return 'Tentei imprimir o Objeto!';
	}
	
	public function __invoke() {
		return 'Objeto como função';
	}
}

$pessoa_01 = new Pessoas();
$pessoa_01->nome = 'Danilo';
$pessoa_01->idade = 50;
$pessoa_01->sexo = 'M';

echo $pessoa_01->nome.'<br>';
echo $pessoa_01->idade.'<br>';
echo $pessoa_01->sexo.'<br>';

echo '<hr>';

// Vou tentar dar um echo em $pessoa_01
// echo $pessoa_01;

// Note que ele retorna um erro
// Mas se eu adicionar o toString na Class
echo $pessoa_01;

// Agora o invoke que é chamando quando a gente tenta utilizar um objeto como função
echo '<hr>';
echo $pessoa_01();


?>