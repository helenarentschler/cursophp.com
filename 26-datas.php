<?php
    date_default_timezone_set('America/Sao_Paulo');
    echo '<br>';
    echo date('d/m/y');
    echo '<br>';
    echo date('d/m/Y');
    echo '<br>';
    echo date('D');
    echo '<br>';
    echo date('M');
    echo '<br>';
    echo date('l');
    echo '<br>';
    echo date('d/m/Y H:i:s');
    echo '<br>';
    echo date('d/m/Y h:i:s A');

    #Salvando infos de data no banco

    $date = date('Y-m-d');
    $datetime = date('Y-m-d H:i:s');
    
    echo '<br>';

    echo time();

    $time = time();
    $time_formatado = date('d/m/Y', $time);

    echo '<br>';

    $data_pagamento = mktime(16, 30, 00, 20, 10, 2022);
    echo date('d/m/Y - h:i', $data_pagamento);

    echo '<br>';

    #Recuperando info de data do banco

    $data = '2022-30-05 13:40:36';

    $data = strtotime($data);

    echo "formataçao de tempo: $data";
    echo '<br>';
    echo date('d/m/Y - h:i', $data);
?>