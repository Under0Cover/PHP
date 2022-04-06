<?php
    /*
        DATETIME
        Intervalo entre duas datas

        Imaginemos um cenário em que temos um cliente com uma dívida que já soma um período de tempo considerável.
        Temos a data em que a dívida foi criada, e temos a data do dia de hoje.
        Queremos saber quantos dias passaram desde que o cliente contraíu esse dívida.
    */

    $data_divida = new DateTime('10-03-1997');
    $agora = new DateTime();

    $intervalo = $data_divida->diff($agora);

    echo $intervalo->days.PHP_EOL;

    print_r($intervalo);
?>