<?php 
    #conexao
    require_once "db_connect.php";

    #inicia sessao
    session_start();

    #verfica se esta logado 
    if(!isset($_SESSION['logado'])) {

        header('Location: index.php');

    }

    #guarda id na variavel
    $id = $_SESSION['id_usuario'];

    #monta a query que busca todos os dados do user com o id
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";

    #consulta e resposta
    $resposta = mysqli_query($connection, $sql);

    #verifica se retornou uma linha de dados
    if (mysqli_num_rows($resposta) == 1) {

        $dados = mysqli_fetch_array($resposta);

        #fecha conexao apos resgate de dados
        mysqli_close($connection);
    
    } else {

        $erro = "<li>Houve um erro no resgate de informaçoes</li>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Restrita</title>
</head>
<body>
    <?php if(empty($erro)) {?>
        <h1>Ola, <?php echo $dados['nome'];?>!</h1>
        <li>Login: <?php echo $dados['login'];?></li>
    <?php } else {
        echo $erro; 
    }?>
    <br><a href="logout.php">Sair</a>
</body>
</html>