<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'home';
  $product = '-';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nuestros productos son fabricados teniendo profundo respeto por el medio ambiente tanto en los procesos como en la elección de los materiales, siendo los mismos reciclables en un 100%.">
	<title>Teto Vinílico | Cielorrasos Premium</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once('includes/tag_manager_body.php'); ?>

	<!-- Contenido HOME -->
	<section id="app" class="home">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Slide -->
		<section data-aos="fade-up" class="container-fluid slide">
			<div class="row">
				<div class="col-md-12 content">
					<img class="img-fluid" src="<?= BASE ?>img/home/header-home.jpg" alt="header home teto vinilico cielorrasos">
					<div class="content_data">
						<h1>CONOCÉ EL TECHO <br>DEL FUTURO</h1>
						<a href="<?= BASE ?>contacto.php" class="btn btn-primary">RECIBIR EL CATÁLOGO</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Slide end -->

		<!-- Lineas -->
		<section class="container lineas">

			<div class="row">

				<div data-aos="fade-up" class="col-md-3 botonera">
					<span data-line="content_line_plus" class="transition btn_line active" id="btn_plus">PLUS</span>
					<span data-line="content_line_origens" class="transition btn_line" id="btn_origens">ORIGENS</span>
					<span data-line="content_line_wood" class="transition btn_line" id="btn_wood">WOOD</span>
				</div>

				<div class="col-md-9">

					<div data-aos="fade-up" id="content_line_plus" class="row content_line active">

						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-plus.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/plus/plus-1.jpg" alt="cielorrasos teto vinilico linea plus 1">
								</a>
							</div>
						</div>

						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-plus.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/plus/plus-2.jpg" alt="cielorrasos teto vinilico linea plus 2">
								</a>
							</div>
						</div>

						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-plus.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/plus/plus-3.jpg" alt="cielorrasos teto vinilico linea plus 3">
								</a>
							</div>
						</div>

					</div>

					<div data-aos="fade-up" id="content_line_origens" class="row content_line">

						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-origens.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/origens/origens-1.jpg" alt="cielorrasos teto vinilico linea origens 1">
							</div>
							</a>
						</div>
						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-origens.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/origens/origens-2.jpg" alt="cielorrasos teto vinilico linea origens 2">
							</div>
							</a>
						</div>
						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-origens.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/origens/origens-3.jpg" alt="cielorrasos teto vinilico linea origens 3">
							</div>
							</a>
						</div>

					</div>

					<div data-aos="fade-up" id="content_line_wood" class="row content_line">

						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-wood.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/wood/wood-1.jpg" alt="cielorrasos teto vinilico linea wood 1">
								</a>
							</div>
						</div>
						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-wood.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/wood/wood-2.jpg" alt="cielorrasos teto vinilico linea wood 2">
								</a>
							</div>
						</div>
						<div class="col-4">
							<div class="photo">
								<a href="<?= BASE ?>linea-wood.php">
									<img class="img-fluid" src="<?= BASE ?>img/productos/wood/wood-3.jpg" alt="cielorrasos teto vinilico linea wood 3">
								</a>
							</div>
						</div>

					</div>

				</div>
					
			</div>

		</section>
		<!-- Lineas end -->

		<!-- Tecnología -->
		<section class="container-fluid tecnologia">

			<div class="row">
				<div class="col-md-12">
					<h2 data-aos="fade-up">TECNOLOGÍA DE <span>VANGUARDIA</span></h2>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content_frase">
							<p class="raleway_medium" data-aos="fade-up">
								Nuestras placas cuentan con 4 capas que forman un producto compacto, resistente y estético.
							</p>
						</div>
						<img data-aos="fade-up" class="img-fluid" src="<?= BASE ?>img/home/capas.gif" alt="capas cielorraso teto vinilico">
					</div>
				</div>
			</div>
				
		</section>
		<!-- Tecnología end -->

		<!-- Ventajas -->
		<section class="container-fluid ventajas">

			<div class="row">
				<div class="col-md-12">
					<h2 data-aos="fade-up">PRINCIPALES <span>VENTAJAS</span></h2>
				</div>
			</div>

			<div class="container">
				<div class="row">
					
					<div class="col-6 col-md-3">
						<div class="content_icon">
							<img data-aos="fade-up" class="img-fluid" src="<?= BASE ?>img/home/icono-libre-mantenimiento.gif" alt="icono cielorraso teto vinilico 1">
							<p data-aos="fade-up">Libre De <br>Mantenimiento</p>
						</div>
					</div>

					<div class="col-6 col-md-3">
						<div class="content_icon">
							<img data-aos="fade-up" class="img-fluid" src="<?= BASE ?>img/home/icono-obra-rapida.gif" alt="icono cielorraso teto vinilico 2">
							<p data-aos="fade-up">Obra Rápida <br>Y Limpa</p>
						</div>
					</div>

					<div class="col-6 col-md-3">
						<div class="content_icon">
							<img data-aos="fade-up" class="img-fluid" src="<?= BASE ?>img/home/icono-sustentables.gif" alt="icono cielorraso teto vinilico 3">
							<p data-aos="fade-up">Sustentables</p>
						</div>
					</div>

					<div class="col-6 col-md-3">
						<div class="content_icon">
							<img data-aos="fade-up" class="img-fluid" src="<?= BASE ?>img/home/icono-liviano.gif" alt="icono cielorraso teto vinilico 4">
							<p data-aos="fade-up">Producto Super <br>Liviano</p>
						</div>
					</div>

				</div>
			</div>
				
		</section>
		<!-- Ventajas end -->

		<!-- Galería -->
		<?php include_once('./includes/galeria-productos.php'); ?>

		<!-- Módulo Contacto -->
		<?php include_once('./includes/modulo-contacto.php'); ?>

		<!-- Materiales Sustentables -->
		<?php include_once('./includes/modulo-materiales-sustentables.php'); ?>

		<!-- Red Distribuidores -->
		<section class="container-fluid distribuidores">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12">
						<h2 data-aos="fade-up">RED DE <span>DISTRIBUIDORES</span></h2>
					</div>

					<div class="col-6 col-md-3">
						<a href="https://depisos.com/" target="_blank" rel="noopener">
						<img
							data-aos="fade-up" 
							class="img-fluid transition" 
							src="<?= BASE ?>img/home/distribuidores-depisos.gif" 
							alt="distribuidores cielorraso teto vinilico depisos">
						</a>
					</div>

					<div class="col-6 col-md-3">
						<a href="https://nordeco.com.ar/" target="_blank" rel="noopener">
						<img
							data-aos="fade-up" 
							class="img-fluid transition" 
							src="<?= BASE ?>img/home/distribuidores-nordeco.gif" 
							alt="distribuidores cielorraso teto vinilico nordeco">
						</a>
					</div>

					<div class="col-6 col-md-3">
						<a href="http://pedraflex.com.ar/" target="_blank" rel="noopener">
						<img
							data-aos="fade-up" 
							class="img-fluid transition" 
							src="<?= BASE ?>img/home/distribuidores-pedra-flex.gif" 
							alt="distribuidores cielorraso teto vinilico pedra flex">
						</a>
					</div>

					<div class="col-6 col-md-3">
						<a href="https://pietrapanel.com.ar/" target="_blank" rel="noopener">
						<img
							data-aos="fade-up" 
							class="img-fluid transition" 
							src="<?= BASE ?>img/home/distribuidores-pietra-panel.gif" 
							alt="distribuidores cielorraso teto vinilico pietra-panel">
						</a>
					</div>

					<div class="col-md-12 content_button">
						<a data-aos="fade-up" href="<?= BASE ?>contacto.php" class="btn btn-primary transition">¿QUERÉS SER PARTE?</a>
					</div>
					
				</div>
			</div>
		</section>
		<!-- Red Distribuidores end -->

		<!-- Ser Parte -->
		<?php include_once('./includes/modulo-ser-parte.php'); ?>

	</section>
	<!-- Contenido HOME end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="<?= BASE ?>dist/bundle.js"></script>

</body>

</html>