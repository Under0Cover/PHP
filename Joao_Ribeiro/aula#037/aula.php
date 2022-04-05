<?php
    /*
        DATAS E HORAS

        A utilização de datas e horas numa aplicação é fundamental e praticamente sempre presente em todos os projetos.
        No PHP existe a possibilidade de usarmos algumas funções mais antigas para a apresentação de datas e horas, ou utilizar uma metodologia mais próxima da programação orientada a objetos com a classe DateTime.

        Vamos ver um exemplo simples de apresentação de uma data formatada.
        Neste caso, iremos sempre usar a data do sistema.
    */

    // Pegando o ano
    echo 'Empresa (c) '.date('Y').PHP_EOL; // Exibe os 4 digitos do ano
    echo 'Empresa (c) '.date('y').PHP_EOL; // Exibe os 2 últidmos digitos do ano

    // Pegando o mês
    echo 'Empresa (c) '.date('M').PHP_EOL; // Exibe a abreviação do nome do mês
    echo 'Empresa (c) '.date('m').PHP_EOL; // Exibe os 2 digitos do mês

    // Pegando o dia
    echo 'Empresa (c) '.date('D').PHP_EOL; // Exibe a abreviação do nome do dia
    echo 'Empresa (c) '.date('d').PHP_EOL; // Exibe os 2 digitos do dia

    // Data completa
    echo 'Empresa (c) '.date('D-M-Y').PHP_EOL; // Exibe os 2 primeiros nomes abreviados e o ano completo em digíto
    echo 'Empresa (c) '.date('d-m-y').PHP_EOL; // Exibe a data completa apenas com numerais (o 0 incluído)

    // Pegando a hora
    echo 'Empresa (c) '.date('H').PHP_EOL; // Exibe formato de 24 horas de uma hora com zeros à esquerda
    echo 'Empresa (c) '.date('h').PHP_EOL; // Exibe formato de 12 horas de uma hora com zeros à esquerda
    
    echo 'Empresa (c) '.date('I').PHP_EOL; // Exibe se a data está ou não no horário de verão
    echo 'Empresa (c) '.date('i').PHP_EOL; // Minutos com zeros à esquerda

    echo 'Empresa (c) '.date('S').PHP_EOL; // Sufixo ordinal inglês para o dia do mês, 2 caracteres
    echo 'Empresa (c) '.date('s').PHP_EOL; // Segundos com zeros à esquerda

    // Data e Hora completa
    echo 'Empresa (c) '.date('d-m-y H:i:s').PHP_EOL; // Exibe a data completa apenas com numerais (o 0 incluído)
?>