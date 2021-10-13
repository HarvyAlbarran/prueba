<?php
    include("conexion.php");
    $connection=conectar();

    $codigo=$_POST['codigo'];
    $dni=$_POST['dni'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];


    $sql="INSERT INTO alumno VALUES('$codigo','$dni','$nombres','$apellidos')";
    $query= mysqli_query($connection,$sql);

    if($query){
        Header("Location: alumno.php");
        
    }else {

    }
?>