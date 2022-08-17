<?php
    session_start();
    session_unset(); //destroys variables
    session_destroy(); //destroys data, not variables
?>