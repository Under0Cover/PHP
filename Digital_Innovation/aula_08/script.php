<?php

// Criando a Sessão
session_start();


$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

// Até agora sigo sem entender a criação desse array...
// Acho que seria mais didático se tivesse um array para cada categoria 
// E um array que seria composto pelas diferentes categorias 

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// Tratamento de erros e verificações de input
	// Nome não pode ser vazio
	if (empty($nome)) {
		$_SESSION['SessionErro'] = 'O nome não pode ser vazio!';
		header('Location: index.php');
		return;
	} else if (strlen($nome) < 3) {
		// Nome não pode ser curto (menor que 3 caracteres)
		$_SESSION['SessionErro'] = 'O nome não pode ser menor que 3 caracteres!';
		header('Location: index.php');
		return;
	} else if (strlen($nome) > 20) {
		// Nome não pode ser longo (maior que 20 caracteres)
		$_SESSION['SessionErro'] = 'O nome é muito extenso!';
		header('Location: index.php');
		return;
	} else if (!is_numeric($idade)) {
		// O php trata nativamente o recebimento de inputs como string, aqui vamos verificar se essa string é númerica
		// O tratamento do erro é caso essa string NÃO SEJA NÚMERICA
		$_SESSION['SessionErro'] = 'Informe um número para a idade!';
		header('Location: index.php');
		return;
	}

// Verificação de idades para separação das categorias
		// Infantil
	if ($idade < 13) {
		for ($indice = 0; $indice <= count($categorias); $indice++) {
			// A parte que eu não entendi...
				/* Tem um for percorrendo o array categorias e logo abaixo ele seta o $indice como 'Infantil' (?) */
			if ($categorias[$indice] == 'infantil') {
				$_SESSION['SucessSession'] = 'O nadador '.$nome. ' compete na cagegoria '.$categorias[$indice].'!';
				header('Location: index.php');
				return;
			}
		}
		// Adolescente
	} else if ($idade < 19) {
		for ($indice = 0; $indice <= count($categorias); $indice++) {
			if ($categorias[$indice] == 'adolescente')
				$_SESSION['SucessSession'] = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$indice].'!';
				header('Location: index.php');
				return;
		}
		// Adulto
	} else {
		for ($indice = 0; $indice <= count($categorias); $indice++) {
			if ($categorias[$indice] == 'adulto')
				$_SESSION['SucessSession'] = 'O nadador '.$nome. ' comepte na categoria' .$categorias[$indice].'!';
				header('Location: index.php');
				return;
		}
	}

?>