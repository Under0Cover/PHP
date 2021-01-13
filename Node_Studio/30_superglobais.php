<?php

// SUPERGLOBAIS
/*
    $GLOBALS    - USADA PARA ACESSAR VARIÁVEIS GLOBAIS DE QUALQUER LUGAR DO PHP
    $_SERVER    - CONTÉM INFORMAÇÕES SOBRE CABEÇALHOS, CAMINHOS E LOCAIS DE SCRIPTS
    $_REQUEST   -
    $_POST      -
    $_GET       -
    $_FILES     -
    $_ENV       -
    $_COOKIE    -
    $_SESSION   -
*/

// $GLOBALS
$variavel_x = 10;
$variavel_y = 15;

function soma() {
   echo $GLOBALS['variavel_x'] + $GLOBALS['variavel_y'];
}

soma();

// $_SERVER
echo $_SERVER['PHP_SELF'].'<br>';
echo $_SERVER['SERVER_NAME'].'<br>';
echo $_SERVER['SCRIPT_FILENAME'].'<br>';
echo $_SERVER['DOCUMENT_ROOT'].'<br>';
echo $_SERVER['DOCUMENT_ROOT'].'<br>';
echo $_SERVER['SERVER_PORT'].'<br>';
echo $_SERVER['REMOTE_ADDR'].'<br>';



?>