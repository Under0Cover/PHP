<?php
    // FILESYSTEM
    mkdir(dirname(__FILE__).DIRECTORY_SEPARATOR.'pasta1');
    chdir(dirname(__FILE__).DIRECTORY_SEPARATOR.'pasta1');
    touch('ficheiro1.php');
    chdir(dirname(__FILE__));
    touch('ficheiro2.php');
?>