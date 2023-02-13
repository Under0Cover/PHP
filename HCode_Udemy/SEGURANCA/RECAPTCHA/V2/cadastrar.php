<?php

    if ($_POST){
        $response = $_POST['g-recaptcha-response'];

        if ($response != '') {
            $curl = curl_init();
    
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => [
                    'secret' => '6Ldc32wkAAAAADlLmHAMCZdZxXZOI-_Wxy5Go_Jd',
                    'response' => $response
                ]
            ]);

            $resposta = curl_exec($curl);
            curl_close($curl);
        }

        echo '<pre>';
        echo $resposta;
        
    }
?>