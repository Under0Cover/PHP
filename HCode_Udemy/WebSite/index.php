<?php

    require_once("vendor/autoload.php");


    use Slim\Slim as Slim;

    $app = new Slim();
    $app->get('/hello/:name', function ($name){
        echo "Hello, ". $name;
    });

    $app->get('/', function(){
        echo json_encode(array(
            'date'=>date("Y-m-d H:i")
        ));
    });

    $app->run();

?>