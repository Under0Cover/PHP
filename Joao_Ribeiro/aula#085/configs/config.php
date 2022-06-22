<?php
    /*
        No curso esse arquivo foi criado com o intuíto de exemplificar a conexão com outro banco de dados.
        Porém, eu vou utilizar para manter a conexão da forma que eu já testei que funciona.
        Dessa forma, eu consigo controlar a funcionalidade da conexão em criação.
    */

    define('CONEXAO_ANTIGA', [
        'localBancoDados' => 'OLIVER\SQLEXPRESS',
        'nomeBancoDados' => 'loja',
        'usuarioBancoDados' => 'teknisa',
        'senhaBancoDados' => 'teknisa',
    ]);

    
    // Definição de conexão com outro banco de dados
    define('CONEXAO_NOVA', [
        'localBancoDados' => 'localhost',
        'nomeBancoDados' => '',
        'usuarioBancoDados' => '',
        'senhaBancoDados' => '',
    ]);

    