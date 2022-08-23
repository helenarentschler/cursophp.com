<?php 
    #inicia sessao
    session_start();

    #verifica se existe mensagem do create
    if(isset($_SESSION['resposta'])) { ?>

    <script>

        window.onload = function() {

            M.toast({html: '<?php echo $_SESSION['resposta']; ?>'});

        };

    </script>

<?php }

    #limpa sessao para na proxima atualizaçao de pagina nao exibir a mensagem
    session_unset();
?>