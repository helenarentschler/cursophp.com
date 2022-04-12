<?php
    $nome = "Helena Rentschler"; //string
    $idade = 19; //int

    var_dump($nome); // retrona infos sobre a variável
    var_dump($idade);
    echo "<br>";

    echo(is_string($nome)); // 1
    echo(is_string($idade)); //nada
    echo "<br>";

    if(is_string($nome)):
        echo "é string";
    else:
        echo "não é string";
    endif;
    echo "<hr>";

    $preco = 12.9; //float
    var_dump($preco);
    echo "<br>";

    if(is_int($preco)):
        echo "é int";
    else:
        echo "não é int";
    endif;
    echo "<hr>";

    $isAlive = false; //boolean
    var_dump($isAlive);

    if(is_bool($isAlive)):
        echo "é boolean";
    else:
        echo "não é boolean";
    endif;
    echo "<hr>";
    
    // Array
    $carros = array('Gol', 'Uno', 'Camaro', 12, 20.6, true);
    var_dump($carros);
    echo "<hr>";

    //Object

    class Cliente {
        public $nome;
        public function atribuirNome($nome) {
            $this->$nome = $nome;
        }
    }

    $cliente = new Cliente();
    $cliente->atribuirNome("Rodrigo");
    var_dump($cliente);

    if(is_object($cliente)):
        echo "é objeto";
    else:
        echo "não é objeto";
    endif;

    // Outros tipos: NULL e RESOURCE
?>
