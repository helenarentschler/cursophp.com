<?php 
    #requer conexao com o banco
    require_once 'php_action/db_connect.php';

    include 'includes/header.php'; 

    #inclui resposta do create
    include 'includes/resposta.php';
?>

<div class="row">

    <div class="col s12 m6 push-m3">

        <h3 class="light">Clientes</h3>

        <table class="striped">

            <thead>

                <tr>

                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>

                </tr>
                
            </thead>

            <tbody>

                <?php 

                    #read todos as colunas da tabela clientes
                    $sql = "SELECT * FROM clientes";

                    $resposta = mysqli_query($connection, $sql);

                    if(mysqli_num_rows($resposta) > 0) {

                        while ($dados = mysqli_fetch_array($resposta)) {
                        ?>

                            <tr>

                                <td><?php echo $dados['nome']; ?></td>
                                <td><?php echo $dados['sobrenome']; ?></td>
                                <td><?php echo $dados['email']; ?></td>
                                <td><?php echo $dados['idade']; ?></td>

                                <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                                
                                <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                            
                            </tr>

                            <!-- Modal -->
                            <div id="modal<?php echo $dados['id'];?>" class="modal">

                                <div class="modal-content">

                                    <h4>Opa!</h4>
                                    <p>Tem certeza que deseja excluir este cliente?</p>

                                </div>

                                <div class="modal-footer">

                                    <form action="php_action/delete.php" method="POST">

                                        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">

                                        <button type="submit" name="btn-deletar" class="btn red">Sim, deletar</button>

                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>

                                    </form>

                                </div>

                            </div>

                     <?php } } ?>

            </tbody>

        </table>

        <br>

        <a href="adicionar.php" class="btn">Adicionar cliente</a>

    </div>

</div>

<?php include 'includes/footer.php'; ?>