<?php
    // Arrays Multidimensionais

    $empresa = [
        'ADMINISTRACAO' => [
            'JOÃO',
            'CARLOS'
        ],
        'CONTABILIDADE' => [
            'MARIANA',
            'JOAQUIM',
            'ANTONIO'
        ],
        'ARMAZEM' => [
            'GESTORES' => [
                'CARLOS',
                'MARCOS'
            ],
            'OPERADORES' => [
                'FERNANDO',
                'MANUEL',
                'LUIS',
                'RICARDO'
            ]
        ],
        'COMERCIAIS' => [
            'LISBOA' => [
                'JOÃO MIGUEL',
                'CARLOS SANTOS'
            ],
            'PORTO' => [
                'MARCO ANTONIO',
                'SERGIO SANTOS'
            ],
            'COIMBRA' => [
                'MARIA SILVA'
            ]
        ]
    ];

    print_r($empresa).PHP_EOL;
    print_r($empresa['ADMINISTRACAO']).PHP_EOL;
    print_r($empresa['CONTABILIDADE']).PHP_EOL;
    print_r($empresa['ARMAZEM']).PHP_EOL;
    print_r($empresa['ARMAZEM']['GESTORES']).PHP_EOL;
    print_r($empresa['ARMAZEM']['OPERADORES']).PHP_EOL;
    print_r($empresa['COMERCIAIS']).PHP_EOL;
    print_r($empresa['COMERCIAIS']['LISBOA']).PHP_EOL;
    print_r($empresa['COMERCIAIS']['PORTO']).PHP_EOL;
    print_r($empresa['COMERCIAIS']['COIMBRA']).PHP_EOL;
?>