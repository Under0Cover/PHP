<?php
// Referência e Clonagem de Objetos

// Criar uma classe aqui só pra exemplificação
// Com um atríbuto só

class Pessoa {
	public $idade;
}

// Instanciar aqui
$individuo_01 = new Pessoa();
// Atribuir uma idade
$individuo_01->idade = 25;

// Vou criar um objeto igual a classe $individuo_01
$individuo_02 = $individuo_01;
// Vou atribuir a idade ao $individuo_02
$individuo_02->idade = 35;

// Vou dar um echo na idade do $individuo_01
echo $individuo_01->idade;

// Como você pôde ver, apareceu a $idade do $individuo_01 como 35
// Agora: Porque isso aconteceu?
// O $individuo_02 não é uma classe instanciada da classe Pessoa
// O $individuo_02 é um objeto que faz referência ao objeto $individuo_01

// Ao invés de fazer uma referência, podemos utilizar o clone
$individuo_03 = clone $individuo_01;
$individuo_03->idade = 45;
echo '<br>';
echo $individuo_01->idade;
echo '<br>';
echo $individuo_03->idade;

// Nesse caso as idades não foram sobreescritas
// Cada $individuo_ tem a sua $idade própria

// Existe um método que pode ser adicionado na class Pessoa
/*
class Pessoa {
	public $idade;
	
	public function __clone() {
		// Esse método é inicializado sempre que a palavra 'clone' for utilizada
		// Como foi feito na linha 30
		echo 'Clonagem de objetos!<br>';
	}
}
*/

?>