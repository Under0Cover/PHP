<?php
// Início da Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>
    <!-- MENSAGEM DE CADASTRO: -->
    <script>
        window.onload = function() {
            M.toast({html: <?php echo $_SESSION['mensagem']; ?>})
        }
    </script>
<?php
endif;
session_unset();
?>