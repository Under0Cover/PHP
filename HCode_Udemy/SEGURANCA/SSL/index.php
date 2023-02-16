<?php
    
    session_start();

    // Lógica de verificação de login e senha
    session_destroy();

    session_start();

    session_regenerate_id();
    
    echo session_id();

?>