<?php
    /*
        DATETIME
        Criar uma data a partir de um formato

        Vamos imaginar que nos é dada uma lista de datas com um determinado formato e que queremos 'assimilar' essas datas para uma estrutura DateTime.

        Neste caso podemos usar o método estático createFromFormat
    */

    $datas = [
        '21-10-1998',
        '12-09-1996',
        '01-07-2001',
        '22-11-1987',
    ];

    foreach($datas as $data){
        $date = DateTime::createFromFormat('d-m-Y', $data);
        $date->add(new DateInterval('P180D'));
        echo $date->format('d-m-Y').PHP_EOL;
    }
?>