<!-- Retornam valor de input modificado (limpa as variáveis) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros de Sanitização</title>
</head>
<body>
    <?php 
        // isset procura se há índice, com ou sem valor
        if(isset($_POST['enviar-formulario'])) {
            $erros = [];

            //impete intepretação de input html
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            
            //filtra os caracteres e devolve apenas o inteiro
            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade, FILTER_VALIDATE_INT)) {
                $erros[] = "Idade precisa ser um inteiro";
            }

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erros[] = "Email inválido";
            }

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)) {
                $erros[] = "URL inválida";
            }

            if (!empty($erros)) {
                foreach($erros as $key => $erro) {
                    echo "$key: $erro";
                } 
            } else {
                echo "Sucesso!";
            }
        }
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome"><br>

        <label for="idade">Idade: </label>
        <input type="text" name="idade"><br>

        <label for="email">Email: </label>
        <input type="text" name="email"><br>

        <label for="url">URL: </label>
        <input type="text" name="url"><br>

        <button type="submit" name="enviar-formulario"> Enviar</button>
    </form>
</body>
</html>