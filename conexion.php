<?php

    function conectar(){
        $host = "localhost";
        $user =  "root"; 
        $password ="";

        $database = "base1";

        $connection = mysqli_connect($host, $user, $password);

        mysqli_select_db($connection, $database);

        return $connection;
    }

?>