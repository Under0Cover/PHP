<?php

// Definindo namespaces
namespace App\Model;

// Essa classe vai ter nos atríbutos os campos do Banco de Dados
class Produto {
	private $id;
	private $nome;
	private $descricao;
	
	// Getters
	public function getNome() {
		return $this->nome;
	}
	
	public function getDescricao() {
		return $this->descricao;
	}
	
	public function getId() {
		return $this->id;
	}
	
	// Setters
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	
	public function setId($id) {
		$this->id = $id;
	}

}

?>