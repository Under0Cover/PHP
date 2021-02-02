<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade < 13) {
	for ($indice = 0; $indice <= count($categorias); $indice++) {
		if ($categorias[$indice] == 'infantil')
			echo 'O nadador '.$nome. ' compete na categoria ' .$categorias[$indice];
	}
} else if ($idade < 19) {
	for ($indice = 0; $indice <= count($categorias); $indice++) {
		if ($categorias[$indice] == 'adolescente')
			echo 'O nadador '.$nome. ' compete na categoria ' .$categorias[$indice];
	}
} else {
	for ($indice = 0; $indice <= count($categorias); $indice++) {
		if ($categorias[$indice] == 'adulto')
			echo 'O nadador '.$nome. ' comepte na categoria' .$categorias[$indice];
	}
}

?>