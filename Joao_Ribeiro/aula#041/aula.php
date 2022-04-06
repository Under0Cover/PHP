<?php
    /*
        DATETIME - ADD e SUB

        Podemos adicionar e subtrair períodos de tempo a uma data.
        Para isso usamos os métodos ADD e SUB

        DateInterval:
        P   -   Período
        PT  -   Período de tempo
    */

    $data = new DateTime('01-01-2000 00:00:00');
    echo 'Hora Padrão'.PHP_EOL;
    var_dump($data).PHP_EOL;

    // Adicionando 180 dias
    $data->add(new DateInterval('P181D'));
    echo '181 Dias a mais'.PHP_EOL;
    var_dump($data).PHP_EOL;

    // Resetando
    $data = new DateTime('01-01-2000 00:00:00');
    echo 'Hora Padrão'.PHP_EOL;
    var_dump($data).PHP_EOL;

    // Adiciona 12 semanas
    $data->add(new DateInterval('P12W'));
    echo '12 Semanas a mais'.PHP_EOL;
    var_dump($data).PHP_EOL;

    // Resetando
    $data = new DateTime('01-01-2000 00:00:00');
    echo 'Hora Padrão'.PHP_EOL;
    var_dump($data).PHP_EOL;

    // Adicionando 72 horas
    $data->add(new DateInterval('PT1285H'));
    // $data->add(new DateInterval('PT80H35M15S')); // Assim se adiciona horas, minutos e segundos em sequência
    echo '72 horas a mais'.PHP_EOL;
    var_dump($data);


    /*
        Para se fazer a SUBTRAÇÃO DO TEMPO A LÓGICA É A MESMA, UTILIZANDO DO PRÉFIXO 'SUB':
        $data->sub(new DateInterval('P181D'));
        $data->sub(new DateInterval('P12W'));
        $data->sub(new DateInterval('PT1285H'));
    */
    

    // echo $data->format('d-m-Y H:i:s
?>