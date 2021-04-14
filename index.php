<?php

session_start();
if(isset($_SESSION['usuario'])){
	header("location: presentacion.php");	
	
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

<!--Encabezado-->
<body>
	<header>
		<nav class="menu">
			<ul>
				<li></li>&nbsp;&nbsp;&nbsp;
				<li>Inicio</li>
				<li>Vision</li>
				<li>Mision</li>
				<li>Contactanos</li>
				<li>Productos
					<ul>
						<li>Producto1</li>
						<li>Producto2
							<ul>
								<li>Subproducto1</li>
								<li>Subproducto2</li>
								<li>Subproducto3</li>
								<li>Subproducto4</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			<li >
				<a href="PHP/login_register.php" class="Iniciar_Registrarse">
					Iniciar o Registrarse
				</a>
			</li>
		</nav>
	</header>
	<script src="assets/js/script.js"></script>

</body>
</html>