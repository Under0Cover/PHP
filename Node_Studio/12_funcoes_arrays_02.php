<?php
/* FUNÇÕES DE ARRAYS
* is_array($array)                          => Verificar se uma determinada variável é um array
* in_array($valor, $array)                  => Verificar se um determinado valor existe em alguma posição do array
* array_keys($array)                        => Retornar um novo array com as chaves do array passado como parâmetro
* array_values($array)                      => Retornar um novo array com os valores do array passado como parâmetro
* array_marge($array1, $array2)             => Agregar o conteúdo dos dois arrays
* array_pop($array)                         => Excluir a última posição do array
* array_shift($array)                       => Excluir a primeira posição do array
* array_unshift($array, "valor")            => Adicionar um ou mais elementos no início de um array
* array_push($array, "valor", "valor")      => Adicionar um ou mais elementos no final de um array
* array_combine($keys, $values)             => Mesclar os dois arrays passados
* array_sum()                               => Calcular a soma dos elementos de um array
* explode("/", "20/01/2001")                => Transformar string em array
* implode("-", $array)                      => Transformar array em string
*/

// * is_array [1 para verdadeiro]
$sobrenome = 'Oliver';
$nomes = array('Professor'=>'Rodrigo', 'Aluno'=>'Felipe', 'Cozinheira'=>'Maria', 'Diretor'=>'José', 'Zelador'=>'Tales');

echo is_array($nomes);
echo '<br>';
// * var_dump(is_array($array)) [true or false]
var_dump(is_array($nomes));
echo '<br>';

if (is_array($nomes)):
    echo 'É um array!';
else:
    echo 'Não é um array';
endif;
echo '<hr>';



// * in_array [1 para verdadeiro]
echo in_array('Rodrigo', $nomes);
echo '<br>';

if(in_array('Tales', $nomes)):
    echo 'Existe no array!';
else:
    echo 'Não existe no array!';
endif;
echo '<hr>';



// array_keys
$keys = array_keys($nomes);
print_r($keys);
echo '<hr>';

// array_values
$values = array_values($nomes);
print_r($values);
echo '<hr>';


?>