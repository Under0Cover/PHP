<?php
    // ----------------------------------------------------------------------------------------------------------------------
    // Vou indicar o caminho que serão armazenadas os dados da sessão
    session_save_path('C:'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR);
    // E posterior, iniciar a sessão
    session_start();
    // Padrão seguido para poder acompanhar os arquivos gerados pelas Sessões
    // ----------------------------------------------------------------------------------------------------------------------

    echo '<pre>';

    // Adicionando variáveis a uma sessão
    $_SESSION['nome'] = 'João';
    $_SESSION['valor'] = 1000;
    $_SESSION['frutos'] = ['banana', 'laranja', 'ananás'];
    print_r($_SESSION);
    echo '<hr>';

    // Removendo variáveis de uma sessão
    unset($_SESSION['valor']);
    print_r($_SESSION);
    echo '<hr>';

    // Alterando o valor de uma variável de sessão
    $_SESSION['nome'] = 'Ribeiro';
    print_r($_SESSION);
    echo '<hr>';

    // Apresentando variáveis da sessão
    echo 'Nome: '.$_SESSION['nome']. '<br>';
    echo 'Fruta: '.$_SESSION['frutos'][1]. '<br>';
    echo '<hr>';

    // Destruíndo todos os dados de uma sessão
    // session_destroy();
    // print_r($_SESSION);

    // Testes:
    unset($_SESSION['frutos'][0]);
    print_r($_SESSION);

    /*
        Há uma informação que se faz necessária incrementar:
            O session_destroy(); vamos ter resultados dessa destruição apenas no próximo request
    */
?>