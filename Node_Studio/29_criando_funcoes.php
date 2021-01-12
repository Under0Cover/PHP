<?php

// CRIANDO FUNÇÕES

function exibirNome() {
    echo 'Meu nome é Tales.<br>';
}

exibirNome();

function exibirNomeParam($nome) {
    echo `Meu nome é $nome.<br>`;
}

exibirNomeParam('Adriele Santos');

echo '<hr>';

function calculoMedia($nome, $nota01, $nota02, $nota03, $nota04) {
    $media ($nota01 + $nota02 + $nota03 + $nota04) /4;
    if ($media >= 8):
        echo `$nome foi aprovado com a Média: $media.<br>`;
    else:
        echo `$nome NÃO foi aprovado com a Média: $media.<br>`;
    endif;
}

calculoMedia('Bob', 5, 7, 9, 3);
calculoMedia('João', 3, 5, 7, 8);

?>