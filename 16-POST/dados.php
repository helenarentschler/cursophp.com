<?php
   // array POST tem índices que correspondem aos valores do atributo nome dos formulários e valores que correspodem ao input no formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "Seu nome é $nome e seu email é $email";
    echo "<br>";
    var_dump($_POST);
?>