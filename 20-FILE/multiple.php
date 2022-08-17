<html>
    <body>
        <?php 
            if(isset($_POST['enviar-form'])) {

                define('PASTA', 'arquivos/');
                define('ARQUIVOS', $_FILES['arquivos']);
                define('FORMATOS_PERMITIDOS', ["png", "jpeg", "jpg", "gif"]);

                foreach(ARQUIVOS['name'] as $index => $nome) {

                    $extensao = "";

                    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

                    if(in_array($extensao, FORMATOS_PERMITIDOS)) {
                        // se o formato estiver no array, guarda o arquivo na pasta arquivos/

                        $novo_nome = uniqid().".".$extensao;

                        $temporario = ARQUIVOS['tmp_name'][$index];

                        if(move_uploaded_file($temporario, PASTA.$novo_nome)) {

                            echo "Upload de $nome realizado com sucesso! <br>";

                        } else {

                            echo "Erro, nao foi possivel realizar o upload de $nome <br>";

                        }

                    } else {

                        echo "Formato de $nome invalido <br>";

                    }

                }
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="arquivos[]" multiple><br>
                <input type="submit" name="enviar-form">
        </form>
    </body>
</html>