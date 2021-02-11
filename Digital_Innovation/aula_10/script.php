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