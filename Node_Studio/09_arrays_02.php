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


?>