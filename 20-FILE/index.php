<html>
    <body>
        <?php 
            if(isset($_POST['enviar-form'])) {

                $arquivo = $_FILES['arquivo']; //array com infos do arquivo

                var_dump($arquivo);

                $formatosPermitidos = array("png", "jpeg", "jpg", "gif");

                $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);

                if(in_array($extensao, $formatosPermitidos)) {
                    // se o formato estiver no array, guarda o arquivo na pasta arquivos/

                    $pasta = "arquivos/";

                    $temporario = $arquivo['tmp_name'];

                    $novo_nome = uniqid().".".$extensao;

                    if(move_uploaded_file($temporario, $pasta.$novo_nome)) {

                        $mensagem = "Upload realizado com sucesso!";

                    } else {

                        $mensagem = "Erro, nao foi possivel realizar o upload";

                    }

                } else {
                    // se nao, guarda mensagem de erro

                    $mensagem = "Formato invalido";

                }

                echo $mensagem;  
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="arquivo"><br>
                <input type="submit" name="enviar-form">
        </form>
    </body>
</html>