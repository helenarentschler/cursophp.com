<?php
    function exibirNome($nome) {
        echo "Meu nome é $nome";
    }

    exibirNome("Helena Rentschler");

    echo "<hr>";

    function calcularMedia($nome, $n1, $n2, $n3, $n4) {
        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        if($media >= 7){
            echo "Sua média foi $media e você está aprovado(a), $nome!";
        } else {
            echo "Sua média foi $media e você está reprovado(a), $nome.";
        }
    }

    calcularMedia("Ana", 8, 10, 7, 5);
?>