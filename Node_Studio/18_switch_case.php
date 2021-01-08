<?php
/* Condicionais Switch Case */

$mensagem = 'A cor escolhida é ';
$cor = 'Vermelho';

switch ($cor):
    case 'Vermelho':
        echo `$mensagem Vermelho`;
	break;
	case 'Verde';
		echo `$mensagem Verde`;
	break;
	case 'Rosa';
		echo `$mensagem Rosa`;
	break;
	default:
		echo 'Sua cor preferida não está no sistema';
	break;
endswitch;

?>