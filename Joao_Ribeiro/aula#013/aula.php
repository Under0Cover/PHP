<?php
    /*
        STR_REPLACE

        Tal como o nome deixa claro, permite fazer subsituição de strings dentro de uma string.
        Neste caso, substitui todas as ocorrências de uma string que exista dentro de outra string.
    */

    $exemplo = 'Este texto serve para testar o sistema.';
    $trocando = str_replace('te', 'TE', $exemplo);
    echo $trocando; // EsTE TExto serve para TEstar o sisTEma.
    echo '<hr>';

    $finalista1 = 'Palmeiras';
    $finalista2 = 'Corinthians';
    $finalista_verdadeiro = 'São Paulo';
    $teste = "O jogo da final será entre $finalista1 e $finalista2";
    $trocando_teste = str_replace("$finalista2", "$finalista_verdadeiro", $teste);
    echo $trocando_teste; // O jogo da final será entre Palmeiras e São Paulo
    // Esse pedaço de código eu fiz antes de assistir a aula. Buscando saber se eu poderia usar variáveis.
    echo '<hr>';

    // ------------------------------------------------------------------------------------------------------------------------------------------------------

    $outra_troca = str_replace(' ', '---->', $exemplo);
    echo $outra_troca; // Este---->texto---->serve---->para---->testar---->o---->sistema.
    echo '<hr>';
    
    /*
        Os parâmetros da funão são 3 obrigatórios e 1 opcional.
        O primeiro parâmetro é o caracter a ser substituído.
        O segundo parâmetro é o caracter a ser colocado.
        O terceiro parâmetro é a variável que irá sofrer as alterações.
        E o quarto, e opcional, parâmetro é a quantidade de alterações que irão acontecer.
            Quando não passado nenhum valor, irá fazer todas as alterações.
    */

    // Não consegui reproduzir a opção de informar valores.

    /*
        Vejamos agora outras opções desta função que são muito interessantes.
        Podemos usar arrays nos dois primeiros parâmetros com os seguintes resultados:
    */

    // $exemplo = 'Este texto serve para testar o sistema.';
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $apenas_consoantes = str_replace($vogais, "", $exemplo);
    echo $apenas_consoantes; // st txt srv pr tstr sstm.
    echo '<hr>';

    $elogio = "O seu jantar está muito bom.";
    $original = ['jantar', 'bom'];
    $novos = ['almoço', 'ruim'];
    $final = str_replace($original, $novos, $elogio);
    echo $final; // O seu almoço está muito ruim.
    echo '<hr>';


    // NOTA: Existe também a função str_ireplace() que, como o 'i' indica, executa a mesma operação, mas é case insensitive.

    $outro_exemplo = "Esta é uma FRASE para EXEMPLO de CASE INSENSITIVE com a outra função.";
    $vogais_minusculas = ['a', 'e', 'i', 'o', 'u'];
    $frase_mudada = str_ireplace($vogais_minusculas, '', $outro_exemplo);
    echo $frase_mudada; // st é m FRS pr XMPL d CS NSNSTV cm tr fnçã.
    echo '<hr>';

?>