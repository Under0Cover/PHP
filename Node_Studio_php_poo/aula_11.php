<?php
// Polimorfismo

class Animal {
	public function Andar() {
		echo 'O animal andou!';
	}
	
	public function Correr() {
		echo 'O animal correu!';
	}
}

class Cavalo extends Animal {
	// Polimorfismo é a capacidade de reescrever o método herdado
	public function Andar() {
		echo 'O cavalo andou!';
	}
}

$elefante = new Animal();
$elefante->Andar();

echo '<hr>';

$mangaLarga = new Cavalo();
$mangaLarga->Andar();

echo '<hr>';

// Herdar o polimorfismo não significa que o método irá fazer a mesma coisa que o método herdado; ele pode ser substituído

class Cachorro extends Animal {
	public function Andar() {
		$this->Correr();
	}
}

$viraLata = new Cachorro();
$viraLata->Andar();

echo '<hr>';

?>