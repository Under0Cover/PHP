<?php
// Tratamento de exceções
/*
	Ocorrência anormal que afeta o funcionamento da aplicação
	Exception é a classe base para todas as Exceptions
	- mensage
	- code
	- file
	- line
*/

class newsLetter {
	public function cadastrarEmail($email){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
			// Aqui vamos começar a lançar as exceções, caso o E-mail seja inválido
			throw new Exception('Este E-mail é invalido', 1);
		else:
			echo 'E-mail cadastrado com sucesso!';
		endif;	
	}
}

// Vamos instanciar aqui
$noticia_01 = new newsLetter();
// Aqui vai dar um erro, mas não adianta lançar a exceção, tem que tratar ela
// $noticia_01->cadastrarEmail('contato@');
// Por isso vamos utilizar o try-catch

try {
	$noticia_01->cadastrarEmail('contato@');
} catch(Exception $excecao) {
	echo "Mensagem: ".$excecao->getMessage()."<br>";
	echo "Código: ".$excecao->getCode()."<br>";
	echo "Arquivo: ".$excecao->getFile()."<br>";
	echo "Linha: ".$excecao->getLine()."<br>";
}

// Assim a exceção está sendo tratada

?>