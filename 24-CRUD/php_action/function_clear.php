<?php 

    function clear($input) {

        global $connection;

        #SQL injection
        $var = mysqli_escape_string($connection, $input);

        #XSS
        $var = htmlspecialchars($var);

        return $var;

    }

?>