<?php
    // Operadores aritméticos + - / * %
    echo 10 % 6;
    echo "<br>";
    echo 3 ** 3; // exponeciação
    echo "<br>";

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 5;

    $add = $a + $b;
    echo $add;
    echo "<br>";

    //operadores de incremento, decremento
    $valor = 20;
    echo ++$valor; //echo $valor = $valor + 1
    echo "<br>";

    $valor2 = 20;
    echo $valor2++; //echo valor2
    echo "<br>";
    echo $valor2; //echo $valor2 = $valor2 + 1
    echo "<br>";

    echo --$valor;
    echo "<br>";

    //operadores de atribuição
    $num = 10;

    $num += 5; // $num = $num + 5;
    echo $num;
    echo "<br>";

    $num -= 3; // $num = $num - 3;
    echo $num;
    echo "<br>";

    //operadores de comparação
    echo 10 == '10'; //true
    echo "<br>";
    echo 10 === '10'; //false
    echo "<br>";
    echo 10 === 10; //true
    echo "<br>";
    echo 10 != 11; //true
    echo "<br>";
    echo 10 <> 11; //true (diferente)
    echo "<br>";

        //SpaceShip
        var_dump(10 <=> 10); // se o lado esquerdo for menor, retorna -1, se forem igual retorna 0 e se o direito for menor, retorna 1.
        echo "<br>";

    //Operadores Lógicos
    $idade = 25;
    $nome = "Ana";
    // and ou &&
    if(($idade == 25) and ($nome == "Rodrigo")):
        echo "é verdadeiro";
    else:
        echo "é falso";
    endif;
    echo "<br>";

    //or ou ||
    if(($idade == 25) or ($nome == "Ana")):
        echo "é verdadeiro";
    else:
        echo "é falso";
    endif;
    echo "<br>";

    //xor
    if(($idade == 25) xor ($nome == "Ana")):
        echo "é verdadeiro";
    else:
        echo "é falso";
    endif;
    echo "<br>";
?>