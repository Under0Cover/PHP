<?php

session_start();

function setarMensagemErro($mensagemErro) : void {
	$_SESSION['SessionErro'] = $mensagemErro;
}

function resgatarMensagemErro() : ?string {
	if (isset($_SESSION['SessionErro'])) {
		return $_SESSION['SessionErro'];
	}
	return null;
}


?>