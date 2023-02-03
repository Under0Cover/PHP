<?php

    require_once("vendor/autoload.php");

    // namespace
    use Rain\Tpl;

    // config
    $config = array(
        "tpl_dir"       => "tpl/",
        "cache_dir"     => "cache/",
        "debug"         => false, // set to false to improve the speed
    );

    Tpl::configure( $config );


    // create the Tpl object
    $tpl = new Tpl;

    // assign a variable
    $tpl->assign( "name", "Tales Oliver" );

    $tpl->assign( "version", PHP_VERSION );

    // draw the template
    $tpl->draw( "index" );

?>