<?php


function defineCategoria($nome, $idade) : ?string {
	
	$categorias = [];
	$categorias[] = 'infantil';
	$categorias[] = 'adolescente';
	$categorias[] = 'adulto';

	// Até agora sigo sem entender a criação desse array...
	// Acho que seria mais didático se tivesse um array para cada categoria 
	// E um array que seria composto pelas diferentes categorias 

	if(validarNome($nome) && validarIdade($idade)) {
		// Verificação de idades para separação das categorias
			// Infantil
		if ($idade < 13) {
			for ($indice = 0; $indice <= count($categorias); $indice++) {
				// A parte que eu não entendi...
					/* Tem um for percorrendo o array categorias e logo abaixo ele seta o $indice como 'Infantil' (?) */
				if ($categorias[$indice] == 'infantil') {
					setarMensagemSucesso('O nadador '.$nome. ' compete na cagegoria '.$categorias[$indice].'!');
					return null;
				}
			}
			// Adolescente
		} else if ($idade < 19) {
			for ($indice = 0; $indice <= count($categorias); $indice++) {
				if ($categorias[$indice] == 'adolescente') {
					setarMensagemSucesso('O nadador '.$nome. ' compete na categoria ' .$categorias[$indice].'!');
					return null;
				}
			}
			// Adulto
		} else {
			for ($indice = 0; $indice <= count($categorias); $indice++) {
				if ($categorias[$indice] == 'adulto') {
					setarMensagemSucesso('O nadador '.$nome. ' comepte na categoria' .$categorias[$indice].'!');
					return null;
				}
			}
		}
	} else {
		return resgatarMensagemErro();
	}
}

?>