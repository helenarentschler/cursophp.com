<?php
    // array GLOBALS guarda todas as variáveis globais, sendo o índice de cada uma delas seu nome
    $x = 10;
    echo $GLOBALS['x'];
    $y = 15;
    echo "<br>";
    echo $GLOBALS['y'];
    echo "<br>";

    function soma() {
        echo $GLOBALS['x'] + $GLOBALS['y'];
    }
    soma();

    echo "<hr>";

    // array SERVER guarda metadata sobre o servidor
    echo $_SERVER['PHP_SELF']."<br>"; //nome do arquivo atual
    echo $_SERVER['SERVER_NAME']."<br>"; //nome do servidor atual
    echo $_SERVER['SCRIPT_FILENAME']."<br>"; //caminho do arquivo
    echo $_SERVER['DOCUMENT_ROOT']."<br>"; // diretório raíz do arquivo
    echo $_SERVER['SERVER_PORT']."<br>"; 
    echo $_SERVER['REMOTE_ADDR']."<br>"; // enderço IP do usuário

?>