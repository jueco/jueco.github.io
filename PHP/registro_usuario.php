<?php

    session_start();

        if(isset($_SESSION['usuario'])){
            header("location: ../presentacion.php");	
        }
        
    include 'conexion_be.php';
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //contraseña incriptada
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios (nombre, correo , usuario, pass) VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
    //verificar que no se repita el correo
    $verif_correo = mysqli_query($conexion, "SELECT * FROM usuarios where correo='$correo'");
    if(mysqli_num_rows($verif_correo) > 0){
        echo 
            '<script>
                alert("Correo ya registrado anteriormente");
                window.location = "login_register.php";
            </script>';
        exit();
    }

    //verificar que no se repita el nombre de usuario
    $verif_usuario = mysqli_query($conexion, "SELECT * FROM usuarios where usuario='$usuario'");
    if(mysqli_num_rows($verif_usuario) > 0){
        echo 
            '<script>
                alert("Este nombre de usuario ya está en uso");
                window.location = "login_register.php";
            </script>';
        exit();
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '<script>
            
            alert("Usuario registrado exitosamente!");
            window.location = "login_register.php";
        </script>';
    }else{
        echo '<script>
            alert("Usuario no registrado :c");
            window.location = "../index.php";
        </script>';
    }

    mysqli_close($conexion);
?>