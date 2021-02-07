<?php

// Criando a Sessão
session_start();


$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// Tratamento de erros e verificações de input
	// Nome não pode ser vazio
	if (empty($nome)) {
		$_SESSION['SessionErro'] = 'O nome não pode ser vazio!';
		header('Location: index.php');
	}

	// Nome não pode ser curto (menor que 3 caracteres)
	if (strlen($nome) < 3) {
		$_SESSION['SessionErro'] = 'O nome não pode ser menor que 3 caracteres!';
		header('Location: index.php');
	}

	// Nome não pode ser longo (maior que 20 caracteres)
	if (strlen($nome) > 20) {
		$_SESSION['SessionErro'] = 'O nome é muito extenso!';
		header('Location: index.php');
	}
	
	// O php trata nativamente o recebimento de inputs como string, aqui vamos verificar se essa string é númerica
	// O tratamento do erro é caso essa string NÃO SEJA NÚMERICA
	if (!is_numeric($idade)) {
		$_SESSION['SessionErro'] = 'Informe um número para a idade';
		header('Location: index.php');
	}

// Verificação de idades para separação das categorias
		// Infantil
	if ($idade < 13) {
		for ($indice = 0; $indice <= count($categorias); $indice++) {
			if ($categorias[$indice] == 'infantil')
				echo 'O nadador '.$nome. ' compete na categoria ' .$categorias[$indice];
		}
		// Adolescente
	} else if ($idade < 19) {
		for ($indice = 0; $indice <= count($categorias); $indice++) {
			if ($categorias[$indice] == 'adolescente')
				echo 'O nadador '.$nome. ' compete na categoria ' .$categorias[$indice];
		}
		// Adulto
	} else {
		for ($indice = 0; $indice <= count($categorias); $indice++) {
			if ($categorias[$indice] == 'adulto')
				echo 'O nadador '.$nome. ' comepte na categoria' .$categorias[$indice];
		}
	}

?>