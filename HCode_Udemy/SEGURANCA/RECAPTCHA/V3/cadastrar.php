<?php

   $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   $response = $dados['g-recaptcha-response'];
   $email = $dados['inputEmail'];
   

   if(isset($dados['btn-enviar'])){
        // Iniciar o cURL
        $curl = curl_init();

        // Enviar requisição
        curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify?secret=6Lcl32ckAAAAAOLKu81Io1yJ43TxRNTDag33anxg&response=".$response);

        // Verificar SSL
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        // Verificando a resposta da URL
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Exeecutar a solicitação
        $resposta = curl_exec($curl);

        // Fechando a sessão do cURL
        curl_close($curl);

        $dados_captcha = json_decode($resposta);
        
        if($dados_captcha->success){
            echo $email;
        } else {
            echo 'Ocorreu um erro!';
        }
   }

?>