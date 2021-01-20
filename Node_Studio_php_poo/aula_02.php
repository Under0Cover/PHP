<?php

class Pessoa {
    public $nome;
    public $sobrenome;
    public $idade;

    public function Falar() {
        echo $this->nome. ' ' .$this->sobrenome. ' de ' .$this->idade. ' anos, acabou de falar!';
    }
}

$rodrigo = new Pessoa();
$rodrigo -> nome = 'Rodrigo';
$rodrigo -> sobrenome = 'Oliveira';
$rodrigo -> idade = 25;
$rodrigo -> Falar();

?>