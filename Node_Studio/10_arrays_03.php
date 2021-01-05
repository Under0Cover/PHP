<?php
// Arrays (01)
$carros = array("BMW", "Veloster", "Hilux");
print_r($carros);
echo '<br>';
echo $carros[0];
echo '<br>';
echo $carros[1];
echo '<br>';
echo $carros[2];
$carros[] = "Amarok";
print_r($carros);
echo '<br>';
$carros[10] = "Camaro";
print_r($carros);
echo '<br>';
echo $carros[10];
echo '<hr>';


$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
$motos[] = "Harley";
print_r($motos);
echo '<hr>';


$clientes = ['Rodrigo', 'Felipe', 'Beatriz'];
print_r($clientes);
echo '<hr>';

// Exibir a quantidade de elementos de um array
// Count
echo count($carros);
echo '<br>';
echo count($motos);
echo '<br>';
echo count($clientes);
echo '<br>';

// Pode atribuir o count em uma variável
$totalClientes = count($clientes);
echo $totalClientes;
echo '<hr>';

// Loop para percorrer arrays
// Foreach
// Carros
foreach ($carros as $valor) {
    echo $valor.'<br>';
}
echo '<hr>';

// Motos
foreach ($motos as $valor) {
    echo $valor.'<br>';
}
echo '<hr>';

// Clientes
foreach ($clientes as $valor) {
    echo $valor.'<br>';
}
echo '<hr>';

// Arrays Associativos
$pessoa = array('nome' => 'Rodrigo', 'idade' => 23, 'altura' => 1.77);
echo $pessoa['nome'];
echo '<br>';
echo $pessoa['altura'];
$pessoa['cidade'] = 'Uberaba';
echo '<br>';
print_r($pessoa);
echo '<br>';
foreach ($pessoa as $indice => $valor) {
    echo $indice.': '.$valor.'<br>';
}
echo '<hr>';

// Arrays Multidimensionais
$times = array(
    'Rio de Janeiro' => array('Campeao'=>'Vasco', 'Vice'=>'Flamengo', 'Terceiro'=>'Botafogo', 'Quarto'=>'Fluminense'), 'São Paulo' => array('Campeao'=>'São Paulo', 'Vice'=>'Corinthians', 'Terceiro'=>'Palmeiras', 'Quarto'=>'Santos'),
    'Minas Gerais' => array('Campeao'=>'América MG', 'Vice'=>'Atlético MG', 'Terceiro'=>'Cruzeiro', 'Quarto'=>'Uberaba')
);

foreach($times['São Paulo'] as $indice => $valor) {
    echo $indice.': '.$valor.'<br>';
}
echo '<br>';

foreach($times['Minas Gerais'] as $indice => $valor) {
    echo $indice.': '.$valor.'<br>';
}
echo '<br>';

foreach($times['Rio de Janeiro'] as $indice => $valor) {
    echo $indice.': '.$valor.'<br>';
}


?>