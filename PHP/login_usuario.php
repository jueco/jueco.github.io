<?php



    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and pass='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../presentacion.php");
        exit;
    }else{
        echo '
            <script>
                alert("Este usuario no existe, verificar datos introducidos");
                window.location = "login_register.php";
            </script>
        ';
        exit;
    }
?>