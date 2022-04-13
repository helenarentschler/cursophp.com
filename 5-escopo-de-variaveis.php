<?php
$nome = "Rodrigo Oliveira"; // escopo global

// function exibeNome() {
//     echo $nome; // escopo global
// }

// exibeNome(); // ERRO variavel indefinida

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

// function exibeCidade() {
//     $cidade = "Rio de Janeiro";
// }

// exibeCidade();
// echo $cidade; // ERRO variavel indefinida

function exibeCidade() {
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";

// Array GLOBALS
$a = 1;
$b = 2;
$c = 3;

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();

?>