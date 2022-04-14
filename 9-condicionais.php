<?php
    $numero = 9.9;

    if($numero == 10):
        echo "é igual a 10";
    elseif($numero < 10):
        echo "é menor que 10";
    else:
        echo "é maior que 10";
    endif;
    echo "<hr>";

    //operador ternário
    $media = 4;
    echo ($media >= 7) ? "Aprovado!" : "Reprovado";
    echo "<hr>";

    //switch case
    $cor = "amarelo";

    switch($cor):
        case "vermelho":
            echo "Sua cor preferida é vermelho!";
        break;
        case "verde":
            echo "Sua cor preferida é verde!";
        break;
        case "azul":
            echo "Sua cor preferida é azul!";
        break;
        default:
            echo "Sua cor preferida não é vermelho, verde, nem azul";
    endswitch;    

?>