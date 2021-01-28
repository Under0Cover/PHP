<?php
// Utilizando o CREATE
	// Padrão PSR4: Autoloader
	require_once 'vendor/autoload.php';

	// Criando um Produto
	$noteDell = new \App\Model\Produto();
	$noteDell->setNome('Notebook DELL');
	$noteDell->setDescricao('i5, 4Gb');

	// Inserindo o produto no BD
	$produtoDao = new \App\Model\ProdutoDao();
	$produtoDao->create($noteDell);

	// Criando outro Produto
	$microfone = new \App\Model\Produto();
	$microfone->setNome('Microfone AT2020');
	$microfone->setDescricao('Microfone Condensador');

	// Inserindo o produto no BD
	$produtoDao = new \App\Model\ProdutoDao();
	$produtoDao->create($microfone);

// Utilizando o READ
	foreach($produtoDao->read() as $produtos):
		echo $produto['nome'].'<br>'.$produto['descricao'].'<hr>';
	endforeach;

// Utilizando o UPDATE
	// Vou setar um Produto com ID para teste de funcionamento do Update

	$teclado = new \App\Model\Produto();
	$teclado->setId(5);
	$teclado->setNome('Teclado USB');
	$teclado->setDescricao('Teclado Gamer USB sem fio');

	$produtoDao = new \App\Model\ProdutoDao();
	$produtoDao->create($teclado);
	$produtoDao->read();
	
	// Depois de criado, vamos atualizar
	$cadeira = new \App\Model\Produto();
	$cadeira->setId(5);
	$cadeira->setNome('Cadeira Gamer');
	$cadeira->setDescricao('Cadeira com Encosto e apoio para os braços');
	
	$produtoDao = new \App\Model\ProdutoDao();
	$produtoDao->update($cadeira);
	
// Utilizando o DELETE
	$produtoDao = new \App\Model\ProdutoDao();
	$produtoDao->delete(1);
	
?>