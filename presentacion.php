<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes de iniciar sesión para entrar a la página");
                window.location = "PHP/login_register.php";
            </script>
        ';
        session_destroy();
        die();    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sanicenter</title>
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<link rel = "preconnect" href = "https://fonts.gstatic.com">
	<link href = "https://fonts.googleapis.com/css2? family = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,100; 1,300; 1,400; 1,500; 1,700; 1,900 & display = swap "rel =" stylesheet ">
	<link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="PHP/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>