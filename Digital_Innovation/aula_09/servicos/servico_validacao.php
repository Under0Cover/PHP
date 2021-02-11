<?php

function validarNome($nome) : bool {
	// Tratamento de erros e verificações de input
	// Nome não pode ser vazio
	if (empty($nome)) {
		$_SESSION['SessionErro'] = 'O nome não pode ser vazio!';
		return false;
	} else if (strlen($nome) < 3) {
		// Nome não pode ser curto (menor que 3 caracteres)
		$_SESSION['SessionErro'] = 'O nome não pode ser menor que 3 caracteres!';
		return false;
	} else if (strlen($nome) > 20) {
		// Nome não pode ser longo (maior que 20 caracteres)
		$_SESSION['SessionErro'] = 'O nome é muito extenso!';
		return false;
	}
	return true;
}

function validarIdade($idade) : bool {
	if (!is_numeric($idade)) {
		// O php trata nativamente o recebimento de inputs como string, aqui vamos verificar se essa string é númerica
		// O tratamento do erro é caso essa string NÃO SEJA NÚMERICA
		$_SESSION['SessionErro'] = 'Informe um número para a idade!';
		return false;
	}
	return true;
}

?>