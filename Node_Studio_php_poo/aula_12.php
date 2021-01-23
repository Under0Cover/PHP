<?php
// Interfaces

// É um modelo a ser usado pelas classes

interface Crud {
	// Aqui é feita a declaração dos métodos 
	// Os métodos aqui inplemantado deverão ser inplemantados nas classes
	// Classes essas que estiverem sido inplemantado nessa Interface
	// Já que essa Interface é um modelo a ser usado pelas classes
	// Ou seja, aqui entra todos os métodos de todas as classes que tiverem nesse escopo
	// Então...
	
	public function create();
	public function read();
	public function update();
	public function delete();
	
	// É claro que a gente pode declarar códigos dentro de cada uma dessas
	// É apenas o método iniciado
	// Também pode ser passado paramêtros dentro de cada método, se necessário
	
	// Este é um exemplo de uma Interface
	
	// Assim se intância uma Interface
	
	class Noticias implements Crud {
		// Ao invés de extends que usamos em Herança, usamos o Implements
		// Aqui estamos implementando a Interface
		// A partir de agora, a classe 'Noticias' é OBRIGADA a ter todos os métodos declarados
		// Neste momento, se os métodos não forem declarados o Sistema considera como erros
		
		public function create() {
			// Aqui entra todo o código, conforme o exemplo, para a criação das Notícias
		}
		
		public function read() {
			// Aqui entra todo o código, conforme o exemplo, para a leitura das Notícias
		}
		
		public function update() {
			// Aqui entra todo o código, conforme o exemplo, para a atualização das Notícias
		}
		
		public function delete() {
			// Aqui entra todo o código, confome o exemplo, para a remoção das Notícias
		}
		
		// A responsabilidade de criar a lógica para a utilização dos métodos é da Classe
		// Pode ter código lá na declaração? Pode. Mas é bom que seja genérico
	}
	
	// Lembrando que os métodos da Interface devem ser públicos para serem acessados por todos
	
}
	
?>