<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// Nome não pode ser vazio
if (empty($nome)) {
	echo 'O nome não pode ser vazio';
	return;
}

// Nome não pode ser curto (menor que 3 caracteres)
if (strlen($nome) < 3) {
	echo 'O nome deve conter mais de 3 caracteres!';
	return;
}

// Nome não pode ser longo (maior que 20 caracteres)
if (strlen($nome) > 20) {
	echo 'O nome é muito extenso!';
	return;
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