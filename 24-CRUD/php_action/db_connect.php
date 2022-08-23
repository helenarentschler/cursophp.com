<?php
    #DB connection
    $servername = "localhost";

    $username = "root";

    $password = "root";

    $db_name = "empreendimento";

    $connection = mysqli_connect($servername, $username, $password, $db_name);

    mysqli_set_charset($connection,'utf8');

    if(mysqli_connect_error()) {

        echo "Falha na conexao: ".mysqli_connect_error();
        
    }
?>