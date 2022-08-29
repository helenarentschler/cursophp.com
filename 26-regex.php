<?php
    $string = "abc";
    // abre regex (/) 
    // abre comparaçao (ˆ)
    // abre e Fecha  definiçao de intervalo [  ]
    // abre e fecha definiçao de quantidade de caracteres { }
    // fecha comparaçao ($)
    // fecha regex(/)
    // Case insensitive (i)
    $padrao = "/^[a-z0-9]{1,4}$/i";

    if (preg_match($padrao, $string)) {
        echo "Valido: ";
        echo $string;
        echo "<hr>";
    } else {
        echo "Invalido";
        echo "<hr>";
    }
?>