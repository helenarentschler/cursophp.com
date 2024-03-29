<?php 
    #requer conexao com o banco
    require_once 'php_action/db_connect.php';

    include 'includes/header.php'; 

    #verifica se o parametro id foi passado por url
    if(isset($_GET['id'])) {

        #filtra o id passado como parametro
        $id = mysqli_escape_string($connection, $_GET['id']);

        #read em todas as colunas, selecionando a linha correspondente ao id
        $sql = "SELECT * FROM clientes WHERE id = '$id'";

        #realiza query
        $resposta = mysqli_query($connection, $sql);

        $dados = mysqli_fetch_array($resposta);

    }
?>

<div class="row">

    <div class="col s12 m6 push-m3">

        <h3 class="light">Editar cliente</h3>

        <form action="php_action/update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

            <div class="input-field class s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field class s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field class s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">Email</label>
            </div>

            <div class="input-field class s12">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-atualizar" class="btn">Atualizar</button>

            <a href="index.php" class="btn green">Lista de clientes</a>

        </form>

    </div>

</div>

<?php include 'includes/footer.php'; ?>