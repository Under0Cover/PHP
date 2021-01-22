<?php
// Classes Abstratas

abstract class Banco {
	protected $saldo;
	protected $limiteSaque;
	protected $juros;
	
	abstract protected function Sacar($valorSaque);
	abstract protected function Depositar($valorDeposito);
	
	// O uso de métodos abstratos não proibe o uso de métodos públicos
	
	public function setSaldo($valor) {
		$this->saldo = $valor;
	}
	
	public function getSaldo() {
		return $this->saldo;
	}
	
}

// Uma classe abstrata não pode ser instanciada
// $Caixa = new Banco();

// Métodos abstratos não podem ser instanciado antes de serem declarados na nova classe
// $agencia001 = new Itau;

class Itau extends Banco {
	public function Sacar($valorSaque) {
		$this->saldo -= $valorSaque;
		echo "Você sacou R$: ".$valorSaque ." e tem um saldo de R$: ".$this->saldo;
	}
	
	public function Depositar($valorDeposito) {
		$this->saldo += $valorDeposito;
		echo "Você depositou R$: ".$valorDeposito ." e tem um saldo de R$: ".$this->saldo;
	}
}

$agencia001 = new Itau();
$agencia001->setSaldo(1000);
echo "Saldo: ".$agencia001->getSaldo();
echo '<hr>';
$agencia001->Sacar(250);
echo '<hr>';
$agencia001->Depositar(900);
echo '<hr>';
?>