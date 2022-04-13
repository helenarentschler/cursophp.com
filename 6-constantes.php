<?php
//constantes
    define("NOME", "José Carlos");
    define("IDADE", 40);
    define("ALTURA", 1.89);
    define("CASADO", true);

    echo NOME;
    var_dump(IDADE);
    echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA;
    echo "<hr>";

    //constantes do tipo ARRAY
    define("TIMES", ['vasco', 'flamengo', 'santos']);
    echo TIMES[0];
    echo "<hr>";

    // contantes são automaticamente GLOBAIS
    function exibeNome() {
        echo NOME;
    }

    exibeNome();
?>