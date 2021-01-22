<?php
// MODIFICADORES DE ACESSO
/*
PUBLIC - Fará com que não haja ocultação nenhuma.
Toda propriedade ou método declarado como 'public' serão acessíveis  por todos que quiserem acessá-los.

PROTECTED - Visibilidade 'protected' faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.

PRIVATE - Ao contrário do 'public', esse modificador faz com que qualquer método ou propriedade seja visível só e somento só pela classe que a declarou.

*/

class Veiculo {
	protected $modelo;
	private $cor;
	public $ano;
	
	public function  Andar() {
		echo 'Andou!<br>';
	}
	
	public function Parar() {
		echo 'Parou!<br>';
	}
	
	public function setModelo($modeloPassado) {
		$this->modelo = $modeloPassado;
	}
	
	public function getModelo() {
		return $this->modelo;
	}
	
	public function setCor($corPassada) {
		$this->cor = $corPassada;
	}
	
	public function getCor() {
		return $this->cor;
	}
	
	public function setAno($anoPassado) {
		$this->ano = $anoPassado;
	}
	
	public function getAno() {
		return $this->ano;
	}
}

class Carro extends Veiculo {
	public function ligarLimpador() {
		echo 'Limpando o vidro!<br>';
	}
}

class Moto extends Veiculo {
	public function darGrau() {
		echo 'Empinando...<br>';
	}
}

$hilux = new Veiculo();
$hilux->setModelo('Hilux');
$hilux->setCor('Preta');
$hilux->setAno('2020');
echo $hilux->getModelo();
echo '<br>';
echo $hilux->getCor();
echo '<br>';
echo $hilux->getAno();
echo '<br>';
var_dump($hilux);
?>