<?php
    $carros = array('celta', 'uno', 'fusca');
    // echo $carros; // ERRO
    print_r($carros);
    echo $carros[0];
    echo "<br>";

    // criar indices
    $lojas = array(1=>'polishop', 2=>'Marisa', 3=>'Americanas');
    echo $lojas[1];
    echo "<br>";

    //inserir item
    $lojas[] = "Renner";
    print_r($lojas);
    echo "<br>";

    $lojas[10] = "Centauro";
    print_r($lojas);
    echo "<br>";

    $motos = array();
    $motos[] = "Yamaha";
    $motos[] = "Honda";
    $motos[5] = "Suzuki";
    print_r($motos);
    echo "<br>";

    //Outra forma de criar array
    $clientes = ["Rodrigo", "Felipe", "Bia"];
    print_r($clientes);
    echo "<br>";

    // Comprimento do array
    $totalLojas = count($lojas);
    echo $totalLojas;
    echo "<br>";

    //Foreach
    foreach($lojas as $loja) {
        echo $loja."<br>";
    }
    echo "<hr>";
    //Arrays numéricos
    //índices/chaves - inteiros

    //Arrays Associativos
    //índices/chaves - strings
        $pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.73);
        echo $pessoa["nome"];
        echo "<br>";
        echo $pessoa["altura"];
        echo "<br>";
        echo $pessoa["idade"];
        echo "<br>";
        $pessoa["cidade"] = "São Paulo";
        print_r($pessoa);
        echo "<hr>";

        foreach($pessoa as $indice => $atributo) {
            echo $indice.": ".$atributo."<br>";
        }
    
    //Arrays multidimensionais
    //arrays de arrays
    $times = array(
        "cariocas" => array("campeão" => "vasco","vice" => "Flamengo", "terceiro" => "Botafogo"),
        "paulistas" => array("Santos", "São Paulo", "Palmeiras"),
        "baianos" => array("Bahia", "Vitória", "Itabuna")
    );
    print_r($times);
    echo "<hr>";
    echo $times["baianos"][1];
    echo "<br>";
    echo $times["cariocas"]["terceiro"];
    echo "<br>";
    foreach($times["cariocas"] as $colocacao => $time) {
        echo $colocacao.": ".$time."<br>";
    }
    echo "<hr>";


    $frutas = ["cítricas" => ["laranja", "limão", "abacaxi"],
               "vermelhas" => ["melancia", "morango", "ameixa"], 
               "verdes" => ["abacate", "kiwi", "maçã verde"]
    ];
    print_r($frutas);
    echo "<br>";
    echo $frutas["vermelhas"][2];
    echo "<hr>";
    foreach($frutas as $indice => $listaFrutas) {
        echo $indice.": ";
        foreach($listaFrutas as $fruta) {
            echo $fruta." ";
        }
        echo "<br>";
    }
?>