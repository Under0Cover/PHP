<?php
    /*
        SESSIONS (Sessões)
        É um mecanismo ou forma que permite guardar dados entre vários requests.
        Permite construir aplicações com informação que está disponível em todas as páginas da nossa aplicação ou website.
    */
    // Vou indicar o caminho que serão armazenadas os dados da sessão
    session_save_path('C:'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR);
    // E posterior, iniciar a sessão
    session_start();
    echo 'SESSÕES';

    $_SESSION['valor'] = 1000;
    $_SESSION['usuario'] = 'Oliver';
    echo PHP_EOL;
    print_r($_SESSION);
?>