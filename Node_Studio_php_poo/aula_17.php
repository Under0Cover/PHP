<?php
// Relação entre os objetos: Agregação
/*
	Na agregação, uma classe precisa da outra para executar sua ação, ou seja,
	Uma classe utiliza a outra como parte de si própria
*/

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

// Instanciando os produtos
$notebook = new Produtos('Notebook', '3500');
$mouse = new Produtos('Mouse', '60');

// Adicionando os produtos no carrinho
$compra_001 = new Carrinho();
$compra_001->adicionarProdutos($notebook);
$compra_001->adicionarProdutos($mouse);

// Exibindo os produtos
$compra_001->exibirProdutos();

?>