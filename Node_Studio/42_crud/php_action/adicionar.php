<?php
// INCLUSÃO DO HEADER
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Novo Cliente</h3>
    <form action="create.php" method="POST">
        <div class="input-field col s12">
            <input type="text" name="nome" id="nomeID">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenomeID">
            <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="email" id="emailID">
            <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="idade" id="idadeID">
            <label for="idade">Idade</label>
        </div>
        <button name="botaoCadastrar" type="submit" class="btn">Cadastrar</button>
        <a href="../index.php" class="btn green">Lista de clientes</a>
    </form>
    </div>
</div>

<?php
//INCLUSÃO DO FOOTER
include_once '../includes/footer.php';
?>