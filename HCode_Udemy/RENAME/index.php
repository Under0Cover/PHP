<?php

    $dir1 = "folder_01";
    $dir2 = "folder_02";
    $filename = 'readme.txt';
    $path1 = $dir1.DIRECTORY_SEPARATOR.$filename;
    $path2 = $dir2.DIRECTORY_SEPARATOR.$filename;

    if (!is_dir($dir1)){
        mkdir($dir1);
    }

    if (!is_dir($dir2)){
        mkdir($dir2);
    }

    if (!file_exists($path1)){
        $file = fopen($path1, 'w+');
        fwrite($file, date("Y-m-d H:i:s"));
        fclose($file);
    }

    rename($path1, $path2);

?>