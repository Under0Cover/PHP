<?php
    // Exemplo de função para calcular a idade

    $data_nascimento = new DateTime('30-06-1984');

    echo calcular_idade($data_nascimento);


    function calcular_idade($data){
        $agora = new DateTime();
        // Primeiro iremos calcular o ano
        if($agora->format('Y') == $data->format('Y')){
            // Verificando se está no mesmo ano
            $anos = 1;
        } else {
            $anos = $agora->format('Y') - $data->format('Y');
        }

        /*
            Falta fazer a validação dos 'anos' de forma precisa
            Se ainda não chegamos ao "nosso" 'mês', temos 1 ano a menos do que é calculado
        */

        if ($agora->format('m') < $data->format('m')){
            $anos--;
        } elseif ($agora->format('m') == $data->format('m')){
            // Estamos no mês do nosso aniversário. Vamos verificar o dia
            if($agora->format('d') < $data->format('d')){
                $anos--;
            }
        }

        // Fazendo o retorno
        if($anos != 1){
            return "$anos anos.";
        } else {
            return "1 ano.";
        }
        
    }
?>