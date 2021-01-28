<?php

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
echo $slug->slugify('Teste com acentuação para geração de slug');
echo '<br>';
echo $slug->slugify('Novo teste com o slug', '_');

?>