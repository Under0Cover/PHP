<?php

class Veiculo {
	protected $modelo;
	private $cor;
	public $ano;
	
	private function  Andar() {
		echo 'Andou!<br>';
	}
	
	protected function Parar() {
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
	
	public function mostrarAcao() {
		$this->Andar();
	}
}

class Carro extends Veiculo {
	public function ligarLimpador() {
		echo 'Limpando o vidro!<br>';
	}
	
	public function frear() {
		$this->Parar();
	}
}

$gol = new Veiculo();
$gol->setModelo('Gol');
$gol->setCor('Preto');
$gol->setAno(2018);
echo $gol->getModelo();
echo '<br>';
echo $gol->getCor();
echo '<br>';
echo $gol->getAno();
echo '<br>';
$gol->mostrarAcao();
echo '<hr>';

$monza = new Carro();
$monza->setModelo('Monza');
$monza->setCor('Azul calcinha');
$monza->setAno(1991);
echo $monza->getModelo();
echo '<br>';
echo $monza->getCor();
echo '<br>';
echo $monza->getAno();
echo '<br>';
$monza->frear();
echo '<hr>';

?>