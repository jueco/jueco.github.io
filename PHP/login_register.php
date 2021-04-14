<?php

session_start();
if(isset($_SESSION['usuario'])){
	header("location: ../presentacion.php");	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sanicenter</title>
	<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<link rel = "preconnect" href = "https://fonts.gstatic.com">
	<link href = "https://fonts.googleapis.com/css2? family = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,100; 1,300; 1,400; 1,500; 1,700; 1,900 & display = swap "rel =" stylesheet ">
	<link rel="stylesheet" href="../assets/css/estilos.css">
</head>
<body>
	<!--Encabezado-->
<body>
	<header>
		<nav class="menu">
			<ul >
				<li></li>&nbsp;&nbsp;&nbsp;
				<li>
					<a href="../index.php">
						Inicio
					</a>
				</li>
				<li>Vision</li>
				<li>Mision</li>
				<li>Contactanos</li>
			</ul>
			<li >
				<a href="login_register.php" class="Iniciar_Registrarse">
					Iniciar o Registrarse
				</a>
			</li>
		</nav>
	</header>
	<script src="assets/js/script.js"></script>

	<main class="main">
		<!--Contenedor de caja trasera-->
		<div class="contenedor__todo">
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>Inicia sesión para entrar en la página.</p>
					<button id="btn__iniciar-sesion">Iniciar &#83esión</button>
				</div>
				<div class="caja__trasera-register">
					<h3>¿No tienes cuenta?</h3>
					<p>Registrarse para iniciar sesión</p>
					<button id="btn__registrarse">Registrarse</button>
				</div>
			</div>
			<!--Formulario para iniciar sesión y registrarse-->
			<div class="contenedor__login-register">
				<!--Login-->
				<form action="login_usuario.php" class="formulario__login" method="POST">
					<h2>Iniciar Sesión</h2>
					<input type="text" placeholder="Correo Electrónico" name="correo">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<button>Entrar</button>
				</form>
				<!--Registro-->
				<form id="form" action="registro_usuario.php" class="formulario__register" method="POST">
					<h2>Registrarse</h2>
					<input type="text" placeholder="Nombre Completo" name="nombre_completo" >
					<input type="text" placeholder="Correo Electrónico" name="correo" class="form-control is-invalid" id="floatingInputInvalid">
					<input type="text" placeholder="Nombre de usuario" name="usuario" class="form-control is-invalid" id="floatingInputInvalid">
					<input type="password" placeholder="Contraseña" name="contrasena" >
					<br/><br/>
					<div class="g-recaptcha" data-sitekey="6Lcso6caAAAAAMwlHzm5n6_MiLH59sQ4aAkGqRP-"></div>
					<button>Registrarse</button>
				</form>
			</div>
		</div>
	</main>

	<script src="../assets/js/script.js"></script>
</body>
</html>