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


?>