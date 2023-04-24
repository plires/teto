<?php
	
	require ('includes/config.inc.php');
  $current = 'productos';
  $product = 'linea_origens';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Con gráficos llamativos y colorido distintivo, la colección Origens le da un aire natural y un toque rústico a su ambiente.">
	<title>Teto Vinílico - LÍNEA ORIGENS | Cielorrasos Premium</title>

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
					<h1 class="h1_products">LÍNEA <span>ORIGENS</span></h1>
					<p class="raleway_medium">
						Con gráficos llamativos y colorido distintivo, la colección Origens le da un aire natural y un toque rústico a su ambiente.
					</p>
				</div>
			</div>
		</section>
		<!-- Descripción end -->

		<!-- Lineas -->
		<section class="container-fluid lineas">

			<div class="container">
				<div class="row">

					<div data-aos="fade-up" class="col-md-12">
						<h2>COLECCIÓN ORIGENS</h2>
					</div>

					<div data-aos="fade-up" class="col-md-12 botonera">
						<span data-line="content_tauri" class="transition btn_line active">TAUARI</span>
						<span data-line="content_carvalho" class="transition btn_line">CARVALHO</span>
						<span data-line="content_okan" class="transition btn_line">OKAN</span>
						<span data-line="content_mogno" class="transition btn_line">MOGNO</span>
						<span data-line="content_angelim" class="transition btn_line">ANGELIM</span>
					</div>
				</div>
			</div>

			<div class="row">

				<div data-aos="fade-up" class="col-md-12 img_show">

					<div id="content_tauri" class="row content_line active">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/origens/origens-origens-tauri.jpg" 
							alt="cielorrasos teto vinilico linea tauri">
					</div>

					<div id="content_carvalho" class="row content_line">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/origens/origens-origens-carvalho.jpg" 
							alt="cielorrasos teto vinilico linea carvalho">
					</div>

					<div id="content_okan" class="row content_line">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/origens/origens-origens-okan.jpg" 
							alt="cielorrasos teto vinilico linea okan">
					</div>

					<div id="content_mogno" class="row content_line">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/origens/origens-origens-mogno.jpg" 
							alt="cielorrasos teto vinilico linea mogno">
					</div>

					<div id="content_angelim" class="row content_line">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/origens/origens-origens-angelim.jpg" 
							alt="cielorrasos teto vinilico linea angelim">
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