<?php

// HERANÇA
/*
* Herança é um recurso que permite que classes compartilham atríbutos e métodos
* afim de reaproveitar códigos ou comportamentos generalizados
*/

class Veiculo {
	// Atríbutos
	public $modelo;
	public $cor;
	public $ano;
	
	// Métodos
	public function Andar() {
		echo 'Andou!';
	}
	
	public function Parar() {
		echo 'Parou!';
	}
}

/* 
Essas classes genéricas como 'Veiculo' deveriam estar em arquivos separados
Mas, como o fim é didático e o projeto não é extenso,
Não há essa necessidade
*/

class Carro extends Veiculo {
	public function ligarLimpador() {
		echo 'Limpando parabrisas....';
	}
}

class Moto extends Veiculo {
	public function empinar() {
		echo 'Olha a PM chegando...';
	}
}

$gol = new Carro();
$gol->modelo = 'Gol';
$gol->cor = 'Vermelho';
$gol->ano = 2018;
$gol->Andar();
echo '<br>';
$gol->ligarLimpador();

echo '<br>';

$titan150 = new Moto();
$titan150->modelo = 'Honda CG 150cc';
$titan150->cor = 'Preta';
$titan150->ano = '2019';
$titan150->Parar();
echo '<br>';
$titan150->empinar();

?>