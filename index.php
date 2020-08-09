<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<!--Estilos AOS-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--Fuente Roboto Google-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<!--Estilos Animate.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

	<title>Prueba</title>
</head>
<body>
	<!--Barra de navegacion-->
	<?php require 'components/navbar.php'; ?>

	<!--Texto-->
	<div class="textos" >
		<div class="titulo">Bienvenido a Tovar's Airlines</div>
		<div class="subtitulo">Nuestro proximo viaje que ciudades incluira en esta ocasión?</div>
	</div>

	<!--Controles-->
	<div class="controles">
		<!--Cuadros-->
		<div class="cuadro waves-effect">
			<p class="cuadro-h">Ubicacion Actual</p>
			<p class="cuadro-t">Zacatecas City</p>
		</div>

		<div class="cuadro waves-effect">
			<p class="cuadro-h">Asistente de Vuelo</p>
			<p class="cuadro-t">Mando/Language:Español</p>
		</div>

		<!--Botones-->
		<div class="botones" data-aos="fade-up" data-aos-anchor-placement="center">
			<button class="btn waves-effect waves-light mic" type="" name="mic">
			    <i class="material-icons center">mic</i>
			</button>

			<button class="btn waves-effect waves-light send" type="submit" name="action">
			    <i class="material-icons center">chevron_right</i>
			</button>
		</div>
	</div>
	
</body>
</html>
<!--Scripts-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="scripts/animaciones.js"></script>
