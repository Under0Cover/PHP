<?php
/*
	Crie um projeto em PHP para uma competição de natação, o sistema deverá  permitir a inserção de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo:
		- 6 a 12 anos						-> Categoria Infantil
		- 13 a 18 anos						-> Categoria Adolescente
		- acima de 18 anos				-> Categoria Adulto
		O sistema deverá retornar a categoria para cada nadador que for cadastrado
*/

// Dividindo as categorias
$categoriaInfantil = [];
$categoriaAdolescente = [];
$categoriaAdulto = [];

$nomeCompetidor
$idadeCompetidor
// Variáveis que deverão ter sido preenchidas no HTML

if ($idadeCompetidor < 13) {
	echo 'Categoria Infantil';
	array_push($categoriaInfatil, $nomeCompetidor);
} else if ($idadeCompetidor < 18) {
	echo 'Categoria Adolescente';
	array_push($categoriaAdolescente, $nomeCompetidor);
} else {
	echo 'Categoria Adulto';
	array_push($categoriaAdulto, $nomeCompetidor);
}


?>