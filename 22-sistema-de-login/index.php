<?php
    #conexao
    require_once "db_connect.php";

    #inicia sessao
    session_start();

    #verifica se clicou no btn-enviar
    if (isset($_POST['btn-entrar'])) {

        #array para coletar os erros
        $erros = array();

        #limpando os caracteres especiais dos inputs de acordo com o charset da conexao
        $login = mysqli_escape_string($connection, $_POST['login']);

        $senha = mysqli_escape_string($connection, $_POST['senha']);

        #verifica de o usuario digitou login e senha
        if(empty($login) or empty($senha)) {

            #se nao, envia erro para o array erros
            $erros[] = "<li> Os campos login e senha precisam ser preenchidos</li>";
        
        } else {
            #se sim, monta a query que seleciona na coluna login aquele que coincide com o input
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            
            #envia a query atraves da conexao, armazena o resultado na variavel
            $resultado = mysqli_query($connection, $sql);

            #verifica se o resultado tem 1 linha ou mais
            if(mysqli_num_rows($resultado) > 0) {

                #criptografa a senha para coincidir com o banco
                $senha = md5($senha);

                #se sim, monta a query que seleciona em todas a colunas a linha em que o login e a senha coincidam com o input
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                
                #guarda na variavel o resultado
                $resultado = mysqli_query($connection, $sql);

                #verifica se retornou apenas 1 linha
                if(mysqli_num_rows($resultado) == 1) {

                    #se sim, tranforma em array o resultado 
                    $dados = mysqli_fetch_array($resultado);

                    #fecha conexao apos resgate de dados
                    mysqli_close($connection);            

                    #e inicia a sessao d o usuario no site
                    $_SESSION['logado'] = true;

                    #guarda na sessao o id que esta no array dados
                    $_SESSION['id_usuario'] = $dados['id'];

                    #redireciona o usuario para a pagina restrita
                    header('Location: home.php');


                } else {
                     #se nao, guarda no array de erros a mensagem
                    $erros[] = "<li> Login ou senha incorretos </li>";

                }

            } else {

                #se nao, armazena mensagem de erro
                $erros[] = "<li> Usuario nao encontrado </li>";

            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
        if(!empty($erros)) {
            foreach($erros as $erro) {
                echo $erro;
            }
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="login"> <br>
        <input type="password" name="senha"> <br>
        <button type="submit" name="btn-entrar">Entrar</button> <br>
    </form>
</body>
</html>