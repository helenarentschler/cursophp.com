<?php
    #DB connection
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "sistemalogin";

    $connection = mysqli_connect($servername, $username, $password, $db_name);

    if(mysqli_connect_error()) {
        echo "Falha na conexao: ".mysqli_connect_error();
    }
?>