<?php
// Relação entre os objetos: Composição
/*
	Na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim
	Quando ela for destruída, a outra classe também será
*/

// Parte do código da aula_17.php
/*
class Produtos {
	public $nome;
	public $valor;
	
	function __construct($nome, $valor) {
		$this->nome = $nome;
		$this->valor = $valor;
	}
}

class Carrinho {
	public $produtos;
	
	public function adicionarProdutos(Produtos $produto) {
		// Vamos passar como paremêtro a classe Produtos
		// O paramêtro da classe 'adicionarProdutos' deve ser uma instância da classe 'Produtos'
		// O que aconteceu aqui é chamado de 'Agregação'
		$this->produtos[] = $produto;
	}
	
	public function exibirProdutos() {
		foreach ($this->produtos as $produto) {
			echo $produto->nome.'<br>';
			echo $produto->valor.'<br>';
			echo '<hr>';
		}
	}
}

*/

/*
	Na Agregação a gente instânciou a classe Produtos, fora da classe Carrinho
	Na Composição a gente vai instânciar uma classe dentro de outra
*/

/*
// Instanciando os produtos
$notebook = new Produtos('Notebook', '3500');
$mouse = new Produtos('Mouse', '60');

// Adicionando os produtos no carrinho
$compra_001 = new Carrinho();
$compra_001->adicionarProdutos($notebook);
$compra_001->adicionarProdutos($mouse);

// Exibindo os produtos
$compra_001->exibirProdutos();
*/

// Início da aula_18

// Classe Pessoa
class Pessoa {
	// Método
	public function atribuirNome($nome) {
		return 'O nome da pessoa é '.$nome;
	}
}

// Classe Exibe
class Exibe {
	// Atríbutos
	// O atríbuto $pessoa vai ser a instância da Classe Pessoa
	public $pessoa;
	// O atríbuto $nome vai armazenar o nome da Pessoa
	public $nome;
	
	// Construtor
	function __construct($nome) {
		// O atríbuto $pessoa vai ser instância da Classe Pessoa
		// A classe Pessoa está sendo instância dentro de outra classe
		$this->pessoa = new Pessoa();
		// Esse é o nome passado pelo paramêtro
		$this->nome = $nome;
	}
	
	// Método
	public function exibeNome() {
		// Esse $this->pessoa agora é um objeto. Instância da Class Pessoa. Ele foi instânciado dentro do construtor
		// Vamos utilizar o método da Class Pessoa
		// Vamos atríbuir o $this->nome 
		// Que o construtor recebe por paramêtro e já atribuiu ao atríbuto $nome
		echo $this->pessoa->atribuirNome($this->nome);
	}
}

// Criando uma instância da Classe Exibe
$exibe = new Exibe('José');
// Utilizando o método da Classe Exibe
$exibe->exibeNome();

?>