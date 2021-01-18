<?php

$senha = '123456';
$senha_db = '$2y$10$jXBoM4tIiBHz3nl9qQp1H.QOkbT8tbSJtuSyw/IUxQwWCQYMdLG/i';
$options = [
    'cost' => 10
];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura.'<br>';

if(password_verify($senha, $senha_db)):
    echo 'Senha válida';
else:
    echo 'Senha inválida';
endif;

?>