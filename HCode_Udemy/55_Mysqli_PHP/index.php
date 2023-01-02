<?php

$conexao = new mysqli('localhost', 'root', '', 'db_php7');

if ($conexao->connect_error){
    echo "Erro: " .$conexao->connect_error;
}

// $stmt = $conexao->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

// $login = 'user';
// $senha = '123';

// $stmt->bind_param('ss', $login, $senha);

// $stmt->execute();

// $login = 'root';
// $senha = '!@#$';

// $stmt->execute();

// CÓDIGOS ACIMA DO EXEMPLO 01 - CONEXÃO E INSERT

$consulta = $conexao->query('SELECT * FROM tb_usuarios ORDER BY idusuario');

$data = array();

while ($row = $consulta->fetch_array(MYSQLI_ASSOC)){
    array_push($data, $row);
}

echo json_encode($data);


?>