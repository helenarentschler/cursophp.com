<?php 
    #retorna warning quanto houver erro e nao para o script
    include 'header.php';

    #nao aparece pois ja foi incluido, 'once' apenas executa o arquivo se ainda n foi execeutado antes
    include_once 'header.php';

    echo 'Ola!';
    
    #retorna fatal error e para o script
    require 'footer.php'; 

    require_once 'footer.php'

?>

