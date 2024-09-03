<?php

require('includes/config.inc.php');
$current = 'productos';
$product = 'linea_plus';

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Desarrollada para atender el segmento de obras y arquitectura de alta gama, la Línea Plus presenta colecciones inspiradas en la sofisticación de la madera y la resistencia del cemento.">
	<title>Teto Vinílico - LÍNEA PLUS | Cielorrasos Premium</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>

<body>

	<!-- Spinner -->
	<?php include('includes/spinner.inc.php'); ?>

	<!-- Tag Manager Body -->
	<?php include_once('includes/tag_manager_body.php'); ?>

	<!-- Contenido PRODUCTOS -->
	<section id="app" class="home products">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Descripción -->
		<section class="container descripcion">
			<div class="row">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<h1 class="h1_products">LÍNEA <span>PLUS</span></h1>
					<p class="raleway_medium">
						Desarrollada para atender el segmento de obras y arquitectura de alta gama, la Línea Plus presenta colecciones inspiradas en la sofisticación de la madera y la resistencia del cemento.
					</p>
					<p class="raleway_medium">
						Una colección de premium que expresa la naturalidad en los materiales retratados. Este producto posibilita ambientes más nobles, llenos de personalidad y buen gusto.
					</p>
				</div>
			</div>
		</section>
		<!-- Descripción end -->

		<!-- Lineas -->
		<section class="container-fluid lineas line_plus">

			<div class="container">
				<div class="row">

					<div data-aos="fade-up" class="col-md-12">
						<h2>COLECCIÓN BREEZE</h2>
					</div>

					<div data-aos="fade-up" class="col-md-12 botonera">
						<span data-line="content_breeze_bold_bege" class="transition btn_line active">BOLD BEGE</span>
						<span data-line="content_breeze_light_bege" class="transition btn_line">LIGHT BEGE</span>
						<span data-line="content_breeze_bold_marron" class="transition btn_line">BOLD MARRÓN</span>
						<span data-line="content_breeze_light_marron" class="transition btn_line">LIGHT MARRÓN</span>
					</div>
				</div>
			</div>

			<div class="row">

				<div data-aos="fade-up" class="col-md-12 img_show">

					<div id="content_breeze_bold_bege" class="row content_line active">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-breeze-bege.jpg"
							alt="cielorrasos teto vinilico linea breeze_bold_bege">
					</div>

					<div id="content_breeze_light_bege" class="row content_line">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-breeze-light-bege.jpg"
							alt="cielorrasos teto vinilico linea breeze_light_bege">
					</div>

					<div id="content_breeze_bold_marron" class="row content_line">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-breeze-bold-marron.jpg"
							alt="cielorrasos teto vinilico linea breeze_bold_marron">
					</div>

					<div id="content_breeze_light_marron" class="row content_line">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-breeze-light-marron.jpg"
							alt="cielorrasos teto vinilico linea breeze_light_marron">
					</div>

				</div>

			</div>

		</section>
		<!-- Lineas end -->

		<!-- Lineas -->
		<section class="container-fluid lineas line_plus">

			<div class="container">
				<div class="row">

					<div data-aos="fade-up" class="col-md-12">
						<h2>COLECCIÓN LÍNEA</h2>
					</div>

					<div data-aos="fade-up" class="col-md-12 botonera">
						<span data-line="content_linea_bege" class="transition btn_line active">BEGE</span>
						<span data-line="content_linea_marron" class="transition btn_line">MARRÓN</span>
					</div>
				</div>
			</div>

			<div class="row">

				<div data-aos="fade-up" class="col-md-12 img_show">

					<div id="content_linea_bege" class="row content_line active">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-linea-bege.jpg"
							alt="cielorrasos teto vinilico linea content_linea_bege">
					</div>

					<div id="content_linea_marron" class="row content_line">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-linea-marron.jpg"
							alt="cielorrasos teto vinilico linea content_linea_marron">
					</div>

				</div>

			</div>

		</section>
		<!-- Lineas end -->

		<!-- Lineas -->
		<section class="container-fluid lineas line_plus">

			<div class="container">
				<div class="row">

					<div data-aos="fade-up" class="col-md-12">
						<h2>COLECCIÓN URBAN</h2>
					</div>

					<div data-aos="fade-up" class="col-md-12 botonera">
						<span data-line="content_urban_silver" class="transition btn_line active">SILVER</span>
						<span data-line="content_urban_grafite" class="transition btn_line">GRAFITE</span>
					</div>
				</div>
			</div>

			<div class="row">

				<div data-aos="fade-up" class="col-md-12 img_show">

					<div id="content_urban_silver" class="row content_line active">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-urban-silver.jpg"
							alt="cielorrasos teto vinilico urban content_urban_silver">
					</div>

					<div id="content_urban_grafite" class="row content_line">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-urban-grafite.jpg"
							alt="cielorrasos teto vinilico urban content_urban_grafite">
					</div>

				</div>

			</div>

		</section>
		<!-- Lineas end -->

		<!-- Lineas -->
		<section class="container-fluid lineas line_plus">

			<div class="container">
				<div class="row">

					<div data-aos="fade-up" class="col-md-12">
						<h2>COLECCIÓN AGAR</h2>
					</div>

					<div data-aos="fade-up" class="col-md-12 botonera">
						<span data-line="content_agar_bege" class="transition btn_line active">BEGE</span>
						<span data-line="content_agar_castanho" class="transition btn_line">CASTANHO</span>
						<span data-line="content_agar_taupe" class="transition btn_line">TAUPE</span>
					</div>
				</div>
			</div>

			<div class="row">

				<div data-aos="fade-up" class="col-md-12 img_show">

					<div id="content_agar_bege" class="row content_line active">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-agar-bege.jpg"
							alt="cielorrasos teto vinilico agar content_agar_bege">
					</div>

					<div id="content_agar_castanho" class="row content_line">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-agar-castanho.jpg"
							alt="cielorrasos teto vinilico agar content_agar_castanho">
					</div>

					<div id="content_agar_taupe" class="row content_line">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-agar-taupe.jpg"
							alt="cielorrasos teto vinilico agar content_agar_taupe">
					</div>

				</div>

			</div>

		</section>
		<!-- Lineas end -->

		<!-- Lineas -->
		<section class="container-fluid lineas line_plus">

			<div class="container">
				<div class="row">

					<div data-aos="fade-up" class="col-md-12">
						<h2>COLECCIÓN JUNGLE</h2>
					</div>

					<div data-aos="fade-up" class="col-md-12 botonera">
						<span data-line="content_jungle_doma" class="transition btn_line active">DOMA</span>
					</div>
				</div>
			</div>

			<div class="row">

				<div data-aos="fade-up" class="col-md-12 img_show">

					<div id="content_jungle_doma" class="row content_line active">
						<img
							class="img-fluid"
							src="<?= BASE ?>img/productos/plus/plus-jungle-doma.jpg"
							alt="cielorrasos teto vinilico jungle content_jungle_doma">
					</div>

				</div>

			</div>

		</section>
		<!-- Lineas end -->

		<!-- Especificaciones Técnicas -->
		<?php include_once('./includes/modulo-especificaciones-tecnicas.php'); ?>

		<!-- Materiales Sustentables -->
		<?php include_once('./includes/modulo-materiales-sustentables.php'); ?>

		<!-- Otras Líneas -->
		<?php include_once('./includes/modulo-otras-lineas.php'); ?>

	</section>
	<!-- Contenido PRODUCTOS end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="<?= BASE ?>dist/bundle.js"></script>

</body>

</html>