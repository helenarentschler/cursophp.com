<!-- Retornam true ou false -->
<html>
<body>
    <?php
        if(isset($_POST['enviar-formulario'])):
            //array de erros
            $erros = array();
            //validações
                                //tipo de input - nome do campo - filtro
            if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro";
            endif;

            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email inválido";
            endif;

            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)): //negativo
                $erros[] = "Peso precisa ser um número";
            endif;

            if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                $erros[] = "IP inválido";
            endif;

            if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                $erros[] = "URL inválida";
            endif;
        endif;

        //exibindo mensagem de erro
        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li>$erro</li>";
            endforeach;
        else:
            echo "Sucesso!";
        endif;
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">ENVIAR</button>
    </form>    
</body>
</html>
