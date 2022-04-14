<?php
    $db = 12345.67;
    //formatação de numero
    $preco = number_format($db, 2, ",", ".");
    echo "O valor do produto é R$".$preco;

    echo "<hr>";

    //arredonda
    echo round(3.6);
    echo "<br>";
    echo round(3.5);
    echo "<br>";
    echo round(3.4);
    echo "<br>";

    //arredonda para cima
    echo ceil(5.2);
    echo "<br>";

    //arredonda para baixo
    echo floor(5.7);
    echo "<br>";

    //gera numero randomico numa faixa
    echo rand(1, 20);
?>