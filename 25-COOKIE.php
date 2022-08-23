<?php 
    #arquivos que o servidor cria na maquina do cliente
    setcookie('nome', 'helena', time()+3600);
    setcookie('email', 'helenarents@gmail.com', time()-3600);
    setcookie('ultima_pesquisa', 'tenis', time()+3600);

    echo $_COOKIE['ultima_pesquisa'];

    var_dump($_COOKIE);
?>