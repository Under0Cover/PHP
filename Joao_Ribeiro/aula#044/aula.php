<?php
    /*
        DATETIME
        Timezone

        PS: https://www.php.net/manual/pt_BR/datetimezone.listabbreviations.php
    */

    $fortaleza = new DateTime('now', new DateTimeZone('America/Fortaleza'));
    $lisboa = new DateTime('now', new DateTimeZone('Europe/Lisbon'));

    echo $fortaleza->format('d-m-Y H:i:s').PHP_EOL;
    echo $lisboa->format('d-m-Y H:i:s').PHP_EOL;


?>