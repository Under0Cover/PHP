<?php

// Iniciando a Sessão na index
session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<title>Formulário de Inscrição</title>
	<meta name='author' content='Oliver'>
	<meta name='description' content='exercicios_curso_digital_innovation'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
	<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
	
	<form action='script.php' method='post'>
		<?php 
			$mensagemErro = isset($_SESSION['SessionErro']) ? $_SESSION['SessionErro'] : '';
			if (!empty($mensagemErro)) {
				echo $mensagemErro;
			}
			$mensagemSucesso = isset($_SESSION['SucessSession']) ? $_SESSION['SucessSession'] : '';
			if (!empty($mensagemSucesso)) {
				echo $mensagemSucesso;
			}
		?>
		<p>Seu nome: <input type='text' name='nome' /></p>
		<p>Sua idade: <input type='text' name='idade' /></p>
		<p><input type='submit' value='Enviar dados do competidor' /></p>
	</form>
</body>

</html>
