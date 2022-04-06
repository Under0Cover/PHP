<?php
    /*
        DATETIME
        Outra forma de manipular a data e a hora

        Existe ainda outra forma muito interessante de manipular um DateTime.
        Vimos que podemos usar o ADD e SUB para adicionar ou remover períodos de tempo, mas existe ainda o método MODIFY.

        Exemplos:
    */

    $lisboa = new DateTime('now', new DateTimeZone('Europe/Lisbon'));
    echo 'Hora exata: '.PHP_EOL;
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    // Modificações:

    echo 'Hora +1 minuto: '.PHP_EOL;
    $lisboa->modify('+1 minute'); // Adicionando 1 minuto
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    echo 'Hora +15 minutos: '.PHP_EOL;
    $lisboa->modify('+15 minutes'); // Adicionando 15 minutos
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    echo 'Hora +30 minutos: '.PHP_EOL;
    $lisboa->modify('+30 minutes'); // Adicionando 30 minutos
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    echo 'Hora +1 dia: '.PHP_EOL;
    $lisboa->modify('+1 day'); // Adicionando 1 dia
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    echo 'Hora +7 dias: '.PHP_EOL;
    $lisboa->modify('+7 days'); // Adicionando 7 dias
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    echo 'Hora +1 mês: '.PHP_EOL;
    $lisboa->modify('+1 months'); // Adicionando 1 mês
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    echo 'Hora +1 ano: '.PHP_EOL;
    $lisboa->modify('+1 year'); // Adicionando 1 ano
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    echo 'Hora +1 ano +3 meses: '.PHP_EOL;
    $lisboa->modify('+1 year +3 months'); // Adicionando 1 ano e 3 meses
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;
    
    echo 'Hora +1 ano +3 dias +5 horas : '.PHP_EOL;
    $lisboa->modify('+1 year +3 days +5 hours'); // Adicionando 1 ano, 3 dias e 5 horas 
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;

    echo 'Hora +1 ano -15 horas : '.PHP_EOL;
    $lisboa->modify('+1 year -15 hours'); // Adicionando 1 ano e retirando 15 horas
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;
?>