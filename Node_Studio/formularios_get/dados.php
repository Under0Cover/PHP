<?php

$nome = $_GET['nome'];
$email = $_GET['email'];

echo `Seu nome é $nome e seu E-mail é $email.`;

// Para exibir os dados passados pelo GET direto da URL
// echo $_GET['idade'].'<br>'.$_GET['sobrenome'].'<br>';

?>