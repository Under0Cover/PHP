<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lcl32ckAAAAAGz_Dhe_LomOpiEQADyNmRef7Lyv"></script>


<form action="cadastrar.php" method="POST">

    <input type="hidden" name="sitekey" id="sitekey" value="6Lcl32ckAAAAAGz_Dhe_LomOpiEQADyNmRef7Lyv">
    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
    <input type="email" name="inputEmail" id="demo-form">
    <button type="submit" name="btn-enviar" value="enviar">Enviar</button>
    
</form>

<script>

    grecaptcha.ready(function() {
        var sitekey = document.getElementById('sitekey').value;
        grecaptcha.execute(sitekey, {action: 'submit'}).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
