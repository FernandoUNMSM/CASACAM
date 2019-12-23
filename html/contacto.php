<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casacam</title>
	<link rel="icon" href="../img/cascam-logo.png">
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Poppins:400,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
	<!-- Header -->
	<header class="contacto-header">
		<div class="sombra">
			<nav class="container-menu menu-cont">
				<ul class="menu">
					<li class="menu-contacto"><a class="list-item" href="">Nosotros</a></li class="menu-servicios">
					<li class="menu-contacto"><a class="list-item" href="./servicios.html">Servicios</a></li>
					<li class="menu-contacto"><a class="list-item" href="../index.html"
							style="padding-left: 25px; padding-right: 25px;">Inicio</a></li>
				</ul>
			</nav>
			<h1>CONTACTO</h1>
		</div>
	</header>

	<section class="container-contacto">
		<div class="contacto">
			<h2>Contactanos</h2>
			<form action="" method="POST">
				<div class="row100">
					<div class="col">
						<div class="inputBox">
							<input type="text" name="Nombre" id="" required="required">
							<span class="text">Nombres</span>
							<span class="line"></span>
						</div>
					</div>
					<div class="col">
						<div class="inputBox">
							<input type="text" name="Apellido" id="" required="required">
							<span class="text">Apellidos</span>
							<span class="line"></span>
						</div>
					</div>
				</div>
				<div class="row100">
					<div class="col">
						<div class="inputBox">
							<input type="text" name="email" id="" required="required">
							<span class="text">Email</span>
							<span class="line"></span>
						</div>
					</div>
					<div class="col">
						<div class="inputBox">
							<input type="text" name="numero" id="" required="required">
							<span class="text">Numero</span>
							<span class="line"></span>
						</div>
					</div>
				</div>
				<div class="row100">
					<div class="col">
						<div class="inputBox textarea">
							<textarea name="mensaje" required="required"></textarea>
							<span class="text">Mensaje</span>
							<span class="line"></span>
						</div>
					</div>
				</div>
				<div class="row100">
					<div class="col">
						<input type="submit" value="Enviar">
					</div>
				</div>
			</form>
			<?php
				$nombre = $_POST['Nombre'];
				$apellido = $_POST['Apellido'];
				$numero = $_POST['email'];
				$email = $_POST['numero'];
				$mensaje = $_POST['mensaje'];

				$nombreCompleto = $nombre + " " + $apellido;
				mail('oscar.cabellos@unmsm.edu.pe', $nombreCompleto, $mensaje);


			?>
		</div>
	</section>
	<!-- Header -->

</body>

</html>