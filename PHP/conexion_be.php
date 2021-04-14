<?php

    session_start();

        if(isset($_SESSION['usuario'])){
            header("location: ../presentacion.php");	
        }

    $conexion = mysqli_connect("localhost", "root" , "", "bdempresa2");
    /*Comprobar si existe la conexión*/
    /*
    if($conexion){
        echo 'Se conectó exitosamente con la base de datos';
    }else{
        echo 'Conexión errónea';
    }
    */
?>