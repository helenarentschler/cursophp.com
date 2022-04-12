<?php
    //Variáveis
    $nome = "Helena Rentschler";
    $idade = 19;
    $altura = 1.61;

    echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura <br>";

    $idade = 20;

    echo "Tenho $idade anos";
    echo "<hr>";

    $carro = "Hilux <br>";

    echo $carro;
    // echo $Carro // ERRO (Case sensitive)

    //Variáveis Dinâmicas
    $bebida = "refrigerante";

    $$bebida = "Guaraná"; // $$bebida = $refrigerante

    echo "$refrigerante <br>";

    $destino = "cidade";
    $$destino = "Ponta Grossa";

    echo "$destino <br>";
    echo $$destino;
    echo "<br>";
    echo "$cidade <br>";

?>