<?php
    $valores = $_POST['data_nascimento'];
    $periodo = $_POST['periodo_dias'];

    $tratamento_periodo = explode(" to ", $periodo);
    $tratamento = explode(" ", $valores);
    
    $data_inicial = $tratamento_periodo[0];
    $data_final = $tratamento_periodo[1];
    $data = $tratamento[0];
    $hora = $tratamento[1];

    echo "Minha data de nascimento é $data.<br>E a minha hora de nascimento é $hora.<br>";
    echo "As suas férias começam em: $data_inicial e terminam em: $data_final.";
?>