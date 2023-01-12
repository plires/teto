<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'empresa';
  $product = '-';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="TETO Vinílico nació en 2020 en São Paulo, Brasil. Desde su lanzamiento, el éxito ha sido absoluto. Apostando por la innovación, la tecnología y la sostenibilidad.">
	<title>Teto Vinílico - EMPRESA | Cielorrasos Premium</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once('includes/tag_manager_body.php'); ?>

	<!-- Contenido EMPRESA -->
	<section id="app" class="empresa">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Descripción -->
		<section class="container descripcion">

			<div class="row title">
				<div class="col-md-12">
					<h1 data-aos="fade-up">EMPRESA</h1>
				</div>
			</div>

			<div class="row data">
				
				<div class="col-md-10 offset-md-1">

					<div class="row">

						<div class="col-md-6">
							<p data-aos="fade-up" class="raleway_regular">
								TETO Vinílico nació en 2020 en São Paulo, Brasil. Desde su lanzamiento, el éxito ha sido absoluto. Apostando por la innovación, la tecnología y la sostenibilidad.
							</p>
							<p data-aos="fade-up" class="raleway_regular">
								Con un producto 100% reciclable, cero costo de mantenimiento y posibilitando un trabajo limpio, TETO Vinílico viene creciendo significativamente y convirtiéndose, cada vez más, en el favorito de los arquitectos de todo Brasil.
							</p>
							<p data-aos="fade-up" class="raleway_regular">
								Es por eso que en el proceso de expansión iniciamos TETO Argentina, con la misma filosofía empresaria y las mismas bases en la innovción, tecnología y sostenibilidad. 
							</p>
						</div>

						<div class="col-md-6">
							<img data-aos="fade-up" class="img-fluid" src="<?= BASE ?>img/empresa/cielorraso-premium.jpg" alt="cielorraso premium teto vinilico">
						</div>

					</div>

				</div>

			</div>

			<div class="row concepto">
				
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">

					<div class="row">

						<div class="col-md-12">
							<h2 data-aos="fade-up">UN NUEVO <span>CONCEPTO</span></h2>
							<p data-aos="fade-up" class="raleway_regular">
								Combinando el concepto de Diseño con la calidad y funcionalidad, presentamos nuestras líneas de Revestimientos Vinílicos para Techo.
							</p>
							<a data-aos="fade-up" href="<?= BASE ?>linea-origens.php" class="transition btn btn-primary">VER PRODUCTOS</a>
						</div>

					</div>

				</div>
				
			</div>

		</section>
		<!-- Descripción end -->

		<!-- Módulo Contacto -->
		<?php include_once('./includes/modulo-contacto.php'); ?>

		<!-- Galería -->
		<?php include_once('./includes/galeria-productos.php'); ?>

	</section>
	<!-- Contenido EMPRESA end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="<?= BASE ?>dist/bundle.js"></script>

</body>

</html>