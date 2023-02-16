<?php

    define('SECRETE_IV', pack('a16', 'senha'));
    define('SECRETE', pack('a16', 'senha'));

    $data = [
        "nome"  =>  "HCode"
    ];

    // Criptografando as informações
    $openssl = openssl_encrypt(
        json_encode($data),
        'AES-128-CBC',
        SECRETE,
        0,
        SECRETE_IV
    );

    var_dump($openssl);

    // Descriptografando as informações
    $string = openssl_decrypt(
        $openssl, 
        'AES-128-CBC', 
        SECRETE, 
        0, 
        SECRETE_IV
    );
    
    var_dump($string);
    // Também pode ser impresso como um array
    // var_dump(json_decode($string, true));

?>