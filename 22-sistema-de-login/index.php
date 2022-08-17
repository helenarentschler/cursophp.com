<?php
    #Verifica se clicou no btn-enviar
    if (isset($_POST['btn-entrar'])) {
        # code...
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
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="login">
        <input type="password" name="senha">
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>