<?php
/* FUNÇÕES DE ARRAYS
* is_array($array)                          => Verificar se uma determinada variável é um array
* in_array($valor, $array)                  => Verificar se um determinado valor existe em alguma posição do array
* array_keys($array)                        => Retornar um novo array com as chaves do array passado como parâmetro
* array_values($array)                      => Retornar um novo array com os valores do array passado como parâmetro
* array_merge($array1, $array2)             => Agregar o conteúdo dos dois arrays
* array_pop($array)                         => Excluir a última posição do array
* array_shift($array)                       => Excluir a primeira posição do array
* array_unshift($array, "valor")            => Adicionar um ou mais elementos no início de um array
* array_push($array, "valor", "valor")      => Adicionar um ou mais elementos no final de um array
* array_combine($keys, $values)             => Mesclar os dois arrays passados
* array_sum()                               => Calcular a soma dos elementos de um array
* explode("/", "20/01/2001")                => Transformar string em array
* implode("-", $array)                      => Transformar array em string
*/

// array_combine
$keys = array('Campeão', 'Vice', 'Terceiro');
$values = array('Vasco', 'Flamengo', 'Botafogo');

$campeonato = array_combine($keys, $values);
print_r($campeonato);
echo '<hr>';

// array_sum
$soma = array(5, 6, 10, 8);
echo array_sum($soma);
echo '<hr>';

?>