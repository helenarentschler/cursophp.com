<?php
    $contador = 1;
    while($contador <= 10):
        echo "Contador é ".$contador."<br>";
        $contador++;
    endwhile;

    echo "<hr>";

    // dowhile não tem escrita alternativa (:)
    $contador = 1;
    do {
        echo "Contador é ".$contador."<br>";
        $contador++;
    } while ($contador <= 10);

    echo "<hr>";

    for($contador = 0; $contador <= 10; $contador++):
        echo "8 x $contador = ".(8*$contador)."<br>";
    endfor;

    echo "<hr>";

    $cores = ["verde", "vermelho", "azul"];

    foreach($cores as $index => $cor):
        echo $index." - ".$cor."<br>";
    endforeach;
?>