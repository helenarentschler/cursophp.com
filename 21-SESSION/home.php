<?php
    session_start();

    echo $_SESSION['cor'];
    echo "<br>";
    echo $_SESSION['carro'];
    echo "<br>";
    echo session_id();
?>