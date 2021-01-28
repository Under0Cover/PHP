<?php

// Definindo namespaces
namespace App\Model;

class ProdutoDao {
	//  Aqui vamos precisar dos 4 métodos do CRUD
	// No create ele recebe como paramêtro do arquivo Produto.php a classe Produto
	public function create(Produto $produto) {
		$sql = 'INSERT INTO produtos (nome, descricao) VALUES (?, ?,)' ;
		// Insert - Cadastrar - stmt
		$stmt = Conexao::getConn()->prepare($sql);
		// Passando o nome e a descrição da index.php para o Banco de Dados
		$stmt->bindValue(1, $produto->getNome());
		$stmt->bindValue(2, $produto->getDescricao());
		// Execute
		$stmt->execute();
		// Todos esses métodos são do PDO
	}
	
	// No read vamos ler todos os dados do Banco de Dados
	public function read() {
		$sql = 'SELECT * FROM produtos';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();
		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}
	
	// No update ele também vai receber Produto.php a classe Produto
	public function update(Produto $produto) {
		$sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $produto->getNome());
		$stmt->bindValue(2, $produto->getDescricao());
		$stmt->bindValue(3, $produto->getId());
		
		$stmt->execute();
	}
	
	// No delete vamos precisar do $id da classe Produto do arquivo Produto.php
	public function delete($id) {
		$sql = 'DELETE FROM produtos WHERE id = ?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute();
	}
	
}

?>