// Função de validação
function validarPost(){
    var resposta = grecaptcha.getResponse();

    if (resposta != '') {
        return true;
    } else {
        alert('Confirmação inválida!');
        return false;
    }
}