<?php

// FOR - FOREACH

// FOR
for ($contador = 0; $contador <= 10; $contador++):
    echo `O contador é $contador <br>`;
endfor;

// TABUADA
for ($contador = 0; $contador <= 10; $contador++):
    echo `8 x $contador = '.(8*$contador).<br>`;
endfor;

echo '<hr>';

// FOREACH
$cores = array('Verde', 'Vermelho', 'Azul', 'Preto');

foreach ($cores as $indice => $valor):
    echo $indice.'- '.$valor.'<br>';
endforeach;

?>