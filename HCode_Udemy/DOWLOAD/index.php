<?php

    $link = "https://www.google.com/logos/doodles/2023/lunar-new-year-2023-6753651837109569.3-l.png";
    $content = file_get_contents($link);
    
    $parse = parse_url($link);
    $basename = basename($parse['path']);

    $file = fopen($basename, 'w+');
    fwrite($file, $content);

    fclose($file);

?>

<img src="<?=$basename?>">