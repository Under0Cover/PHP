<?php
// Manipulação de arquivos
/*
fopen()
fclose()
fwrite()
!feof()
fgets()
filesize
*/

$arquivo = 'arquivo.txt';
$conteudo = "Teste de conteúdo\r\n";

// Abrir o Arquivo e Modo Escrita
$arquivoAberto = fopen($arquivo, 'a');
// Escrever no Arquivo
fwrite($arquivoAberto, $conteudo);
// Fechar o Arquivo
fclose($arquivoAberto);
// Abrir o Arquivo e Modo Leitura
$arquivoAberto = fopen($arquivo, 'r');
// Ler o Arquivo
while(!feof($arquivoAberto)):
    $tamanhoArquivo = filesize($arquivo);
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha.'<br>';
endwhile;
// Fechar o Arquivo
fclose($arquivoAberto);


?>