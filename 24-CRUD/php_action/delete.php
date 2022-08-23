<?php
    //Inserindo dados na tabela cliente (CREATE)

    #inicia sessao
    session_start();

    #requer conexao com o banco
    require_once 'db_connect.php';

    if(isset($_POST['btn-deletar'])) {

        #limpa valores inseridos
        $id = mysqli_escape_string($connection, $_POST['id']);

        #insere valores na tabela clientes
        $sql = "DELETE FROM clientes WHERE id = '$id'";

        #realiza query no banco
        if(mysqli_query($connection, $sql)) {

            #inicia sessao que guarda mensagem de sucesso
            $_SESSION['resposta'] = 'Cliente deletado com sucesso.';

            #redireciona para index 
            header('Location: ../index.php');

        } else {

            $_SESSION['resposta'] = 'Erro ao deletar cliente.';

            header('Location: ../index.php');

        }

    } 
?>