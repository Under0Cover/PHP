<?php
// CONEXÃO COM O BANCO DE DADOS
include_once 'db_connect.php';
// INCLUSÃO DO HEADER
include_once '../includes/header.php';
// QUERY DE CONSULTA
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Editar Cliente</h3>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="input-field col s12">
            <input type="text" name="nome" id="nomeID" value="<?php echo $dados['nome']; ?>">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenomeID" value="<?php echo $dados['sobrenome']; ?>">
            <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="email" id="emailID" value="<?php echo $dados['email']; ?>">
            <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="idade" id="idadeID" value="<?php echo $dados['idade']; ?>">
            <label for="idade">Idade</label>
        </div>
        <button name="botaoEditar" type="submit" class="btn">Editar</button>
        <a href="../index.php" class="btn green">Lista de clientes</a>
    </form>
    </div>
</div>

<?php
//INCLUSÃO DO FOOTER
include_once '../includes/footer.php';
?>