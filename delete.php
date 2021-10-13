<?php

    include("conexion.php");
    $connection=conectar();

    $codigo=$_GET['id'];

    $sql="DELETE FROM alumno  WHERE codigo='$codigo'";
    $query=mysqli_query($connection,$sql);

        if($query){
            Header("Location: alumno.php");
        }
?>