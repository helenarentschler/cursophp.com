<?php
   // método GET passa parametros pela url
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    echo "Seu nome é $nome e seu email é $email";
    echo "<br>";

    var_dump($_GET);
