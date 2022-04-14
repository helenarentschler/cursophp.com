<?php
    $nomes = array("Rodrigo", "Felipe", "Maria", "José");

    echo(is_array($nomes)); //1
    echo "<br>";
    var_dump(is_array($nomes)); // boolean true

    if(is_array($nomes)):
        echo "é um array";
    else:
        echo "não é um array";
    endif;
    echo "<hr>";

    echo(in_array("Rodrigo", $nomes)); //verifica se está no array
    echo "<br>";

    if(in_array("Carlos", $nomes)):
        echo "Olá, Carlos!";
    else:
        echo "Não há Carlos";
    endif;
    echo "<hr>";

    $keys = array_keys($nomes); //retorna um array com os indices;
    print_r($keys);
    echo "<br>";

    $familia = ["pai" => "Luiz", "mãe" => "Valéria", "irmão" => "Luiz", "irmã" => "Ingrid"];

    $familiares = array_keys($familia); 
    print_r($familiares);
    echo "<hr>";

    $membrosFamilia = array_values($familia);//retorna um array com os valores;
    print_r($membrosFamilia);
    echo "<hr>";

    $pessoas = array_merge($nomes, $familia); //mistura dois arrays
    print_r($pessoas);
    echo "<hr>";

    echo array_pop($pessoas); //exclui ultimo elemento e retorna ele
    echo "<br>";
    print_r($pessoas);
    echo "<hr>";

    echo array_shift($pessoas);//exclui primeiro elemento e retorna ele
    echo "<br>";
    print_r($pessoas);
    echo "<hr>";

    array_unshift($pessoas, "Paulo", "Carlos"); // adiciona 1 ou mais elementos no inicio do array
    echo "<br>";
    print_r($pessoas);
    echo "<hr>";

    array_push($pessoas, "Ana", "Maria");
    print_r($pessoas);
    echo "<hr>";

    $keys = array("Campeão", "Vice", "Terceiro");
    $values = array("Vasco", "Flamengo", "Botafogo");

    $times = array_combine($keys, $values); // mescla 2 arrays (1° - indices, 2° - valores)
    print_r($times);
    echo "<hr>";

    $soma = array(5,6,7,8.4);
    echo array_sum($soma);
    echo "<hr>";

    $data = "30/02/2018";
                    //separador //string
    $arrayData = explode("/", $data); //transforma string em array
    print_r($arrayData);
    echo "<br>";
    $frase = "O meu nome é Helena";
    $arrayFrase = explode(" ", $frase);
    print_r($arrayFrase);
    echo "<hr>";

    $nomes = ["Rodrigo", "Carlos", "Neusa", "Talita"];

    $stringNomes = implode(", ", $nomes); // transforma array em string
    echo $stringNomes;
    echo "<hr>";


?>