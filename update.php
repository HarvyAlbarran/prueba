<?php

    include("conexion.php");
    $connection=conectar();

    $codigo=$_POST['codigo'];
    $dni=$_POST['dni'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];

    $sql="UPDATE alumno SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE codigo='$codigo'";
    $query=mysqli_query($connection,$sql);

        if($query){
            Header("Location: alumno.php");
        }
?>