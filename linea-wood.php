<?php
	
	require ('includes/config.inc.php');
  $current = 'productos';
  $product = 'linea_woods';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="La colección Teca asume los colores naturales de los elementos, y el movimiento de las vetas y líneas del tiempo.">
	<title>Teto Vinílico - LÍNEA WOOD | Cielorrasos Premium</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>
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
					<h1 class="h1_products">LÍNEA <span>WOOD</span></h1>
					<p class="raleway_medium">
						La colección Teca asume los colores naturales de los elementos, y el movimiento de las vetas y líneas del tiempo. Su elegancia le confiere atemporalidad y refinamiento, permitiendo crear espacios acogedores y distintivos.
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
						<h2>COLECCIÓN TECA</h2>
					</div>

					<div data-aos="fade-up" class="col-md-12 botonera">
						<span data-line="content_cinza" class="transition btn_line active">CINZA</span>
						<span data-line="content_castanho" class="transition btn_line">CASTANHO</span>
						<span data-line="content_noz" class="transition btn_line">NOZ</span>
						<span data-line="content_taupe" class="transition btn_line">TAUPE</span>
						<span data-line="content_bege" class="transition btn_line">BEGE</span>
					</div>
				</div>
			</div>

			<div class="row">

				<div data-aos="fade-up" class="col-md-12 img_show">

					<div id="content_cinza" class="row content_line active">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/wood/wood-teca-cinza.jpg" 
							alt="cielorrasos teto vinilico linea cinza">
					</div>

					<div id="content_castanho" class="row content_line">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/wood/wood-teca-castanho.jpg" 
							alt="cielorrasos teto vinilico linea castanho">
					</div>

					<div id="content_noz" class="row content_line">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/wood/wood-teca-noz.jpg" 
							alt="cielorrasos teto vinilico linea noz">
					</div>

					<div id="content_taupe" class="row content_line">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/wood/wood-teca-taupe.jpg" 
							alt="cielorrasos teto vinilico linea taupe">
					</div>

					<div id="content_bege" class="row content_line">
						<img 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/wood/wood-teca-bege.jpg" 
							alt="cielorrasos teto vinilico linea bege">
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