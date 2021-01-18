<?php
// Conexão
include_once 'php_action/db_connect.php';
// INCLUSÃO DO HEADER
include_once 'includes/header.php';
// Mensagem
include_once 'includes/mensagem.php';
?>


<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
        <table class='striped'>
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>E-mail:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = 'SELECT * FROM clientes';
                    $resultado = mysqli_query($connect, $sql);
                        if (mysqli_num_rows($resultado) > 0):
                            while ($dados = mysqli_fetch_array($resultado)):?>
                                <tr>
                                    <td><?php echo $dados['nome']; ?></td>
                                    <td><?php echo $dados['sobrenome']; ?></td>
                                    <td><?php echo $dados['email']; ?></td>
                                    <td><?php echo $dados['idade'] ?></td>
                                    <td><a href="../php_action/editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                                    <!-- Modal Structure -->
                                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                        <div class="modal-content">
                                            <h4>Opa!</h4>
                                            <p>Tem certeza que deseja excluir esse cliente?!</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="php_action/delete.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                                <button type="submit" name="botaoDeletar" class="btn red">Deletar</button>
                                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                            </form>
                                        </div>
                                    </div>
                                </tr>
                            <?php endwhile;
                        else: ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        <?php
                        endif; ?>
            </tbody>
        </table>
        <br>
        <a href="php_action/adicionar.php" class="btn">ADICIONAR CLIENTE</a>
    </div>
</div>

<?php
//INCLUSÃO DO FOOTER
include_once 'includes/footer.php';
?>