<?php
     $nome = "rodrigo oliveira";
     $novoNome = strtoupper($nome); //maiúsculo
     echo $novoNome;
     echo "<br>";

     $lowerNome = strtolower($novoNome);
     echo $lowerNome;
     echo "<hr>";

     $mensagem = "Olá Mundo!";
    //string, char inicial, comprimento string final
     echo substr($mensagem, 4, 6); // retorna a string cortada a partir do ponto indicado

     echo "<hr>";

     $objeto = "mouse";
     $novoObjeto = str_pad($objeto , 7, "*"); // preenche a string para alcançar o numero especificado de caracteres
     echo $novoObjeto;
     echo "<br>";
     $outroObjeto = str_pad($objeto , 10, "*", STR_PAD_LEFT); //LEFT, RIGHT, BOTH
     echo $outroObjeto;

     echo "<hr>";

     $string = str_repeat("Sucesso! ", 5);
     echo $string;

     echo "<hr>";

     $msg = "Olá Mundo!";
     echo strlen($msg); // comprimento

     echo "<hr>";

     $texto = "A seleção Argentina será campeã da copa do mundo de 2022";
     $novoTexto = str_replace("Argentina", "Brasileira", $texto);
     echo $novoTexto;

     echo "<hr>";

     echo strpos($texto, "será"); //posiçao da palavra na string
?>