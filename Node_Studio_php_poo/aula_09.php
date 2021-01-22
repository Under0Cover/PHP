<?php
// Constantes

class Pessoa {
	const nome = 'Tales';
	
	public function exibirNome() {
		// self :: const referencia à constante da classe
		echo self::nome;
	}
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
echo '<hr>';

class Tales extends Pessoa {
	const nome = 'Oliver';
	
	public function exibirNome() {
		// parent :: const referencia à constante da classe pai
		echo parent::nome;
		echo ' ';
		// self :: const referencia à constante da própria classe, mesmo que a classe pai tenha outras constantes
		echo self::nome;
	}
}

$tales = new Tales();
$tales->exibirNome();

?>