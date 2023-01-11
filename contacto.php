<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'contacto';
  $product = '-';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Tenés alguna duda sobre nuestros productos o queres conocer las últimas novedades y lanzamiento, escribínos.">
	<title>Teto Vinílico - CONTACTO | Cielorrasos Premium</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once('includes/tag_manager_body.php'); ?>

	<!-- Contenido CONTACTO -->
	<section id="app" class="empresa contacto">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Descripción -->
		<section class="container descripcion">

			<div class="row title">
				<div class="col-md-12">
					<h1 data-aos="fade-up">CONTACTO</h1>
				</div>
			</div>

			<div class="row data">
				<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
					<div class="row">
						<div class="col-md-12">
							<p data-aos="fade-up" class="raleway_regular">
								Tenés alguna duda sobre nuestros productos o queres conocer las últimas novedades y lanzamiento, escribínos.
							</p>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- Descripción end -->

		<!-- Módulo Contacto -->
		<?php include_once('./includes/modulo-contacto.php'); ?>

		<!-- Datos -->
		<section class="container-fluid datos">

			<div class="row">
				<div class="col-md-6 content_data">

					<a class="transition raleway_regular" href="https://goo.gl/maps/BMo7vQbSpN8RqQZR9" target="_blank" rel="noopener">
						<span class="raleway_medium">Dirección:</span> Calle 56 4575. San Martin. <br>Buenos aires
					</a><br>

					<a class="transition raleway_regular" href="tel:1163790009" target="_blank" rel="noopener">
						<span class="raleway_medium">Teléfono:</span> 11 6379 0009
					</a><br>

					<a class="transition raleway_regular" href="mailto:info@tetoargentina.com" target="_blank" rel="noopener">
						<span class="raleway_medium">Email:</span> info@tetoargentina.com
					</a>

				</div>
				<div class="col-md-6 content_mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.908346449855!2d-58.5458967!3d-34.5811856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb774f2956441%3A0xf2cfb2557267bc0c!2sTeto%20Vinilico%20Argentina!5e0!3m2!1ses!2sar!4v1673404032576!5m2!1ses!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>

		</section>
		<!-- Datos end -->

		<!-- Galería -->
		<?php include_once('./includes/galeria-productos.php'); ?>

	</section>
	<!-- Contenido CONTACTO end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="<?= BASE ?>dist/bundle.js"></script>

</body>

</html>