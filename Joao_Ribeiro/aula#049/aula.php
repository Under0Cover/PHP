<?php
    /*
        LIST E EXTRACT
        Transformar um array em várias variáveis

        É possível transfomar os valores de um array, cada um para uma variável específica.
        Utilizamos a função list().
    */

    $nomes = ['JOAO', 'ANA', 'CARLOS'];
    list($nome1, $nome2, $nome3) = $nomes;

    echo $nome1.PHP_EOL;
    echo $nome2.PHP_EOL;
    echo $nome3.PHP_EOL;

    // Caso necessário, podemos pegar apenas alguns elementos

    $carros = ['GOL', 'DOBLO', 'FUSCA', 'L200'];
    list($volks1,, $volks2) = $carros;

    echo $volks1.PHP_EOL;
    echo $volks2.PHP_EOL;

    // Podemos ainda usar o extract() para, automaticamente, cada valor pasar para uma variável com o nome da chave

    $funcionarios = [
        'ADMINISTRADOR' => 'JOAO',
        'SECRETARIA' => 'ANA',
        'CONTABILIDADE' => 'CARLOS'
    ];

    extract($funcionarios);
    echo $ADMINISTRADOR.PHP_EOL;
    echo $SECRETARIA.PHP_EOL;
    echo $CONTABILIDADE.PHP_EOL;

    /*
        IMPORTANTE:
            Não devemos usar o extract com arrays que não controlamos, como por exemplo, os dados da superglobal $_POST[] quando fazemos a submissão de um formulário
    */

?>