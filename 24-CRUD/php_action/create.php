<?php
    //Inserindo dados na tabela cliente (CREATE)

    #inicia sessao
    session_start();

    #requer conexao com o banco
    require_once 'db_connect.php';

    #requer funçao de limpeza
    require_once 'function_clear.php';

    if(isset($_POST['btn-cadastrar'])) {

        #limpa valores inseridos

        $nome = clear($_POST['nome']);

        $sobrenome = clear($_POST['sobrenome']);

        $email = clear($_POST['email']);

        $idade = clear($_POST['idade']);


        #insere valores na tabela clientes
        $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

        #realiza query no banco
        if(mysqli_query($connection, $sql)) {

            #inicia sessao que guarda mensagem de sucesso
            $_SESSION['resposta'] = 'Cliente cadastrado com sucesso.';

            #redireciona para index 
            header('Location: ../index.php');

        } else {

            $_SESSION['resposta'] = 'Erro no cadastro de cliente.';

            header('Location: ../index.php');

        }

    } 
?>