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

function setarMensagemSucesso($mensagemSucesso) : void {
	$_SESSION['SucessSession'] = $mensagemSucesso;
}

function resgatarMensagemSucesso() : ?string {
	if (isset($_SESSION['SucessSession'])) {
		return$_SESSION['SucessSession'];
	}
	return null;
}

function removerMensagemErro() {
	if (isset($_SESSION['SessionErro'])) {
		unset $_SESSION['SessionErro'];
	}
}

function removerMensagemSucesso() {
	if (isset($_SESSION['SucessSession'])) {
		unset $_SESSION['SucessSession'];
	}
}
?>