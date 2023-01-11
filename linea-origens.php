<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
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
						<h2> COLECCIÓN ORIGENS</h2>
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
		<section class="container-fluid especificaciones">
			
			<div class="row">
				<div class="col-md-12 content_title">
					<h2 data-aos="fade-up">ESPECIFIACIONES <span>TÉCNICAS</span></h2>
				</div>
			</div>

			<div class="container">
				<div class="row">

					<div class="col-md-12 content_img">
						<h3 data-aos="fade-up">CORTE TRANSVERSAL</h3>
						<img
							data-aos="fade-up" 
							class="img-fluid" 
							src="<?= BASE ?>img/productos/corte-transversal.png" 
							alt="cielorrasos teto vinilico argentina corte transversal">
					</div>

					<div class="col-sm-6 content_medidas">
						<p data-aos="fade-up" class="jost_regular"><span class="jost_medium">MEDIDA: </span>200mmx6000mmx8mm / 200mmx3000mmx8mm</p>
						<p data-aos="fade-up" class="jost_regular"><span class="jost_medium">PAQUETE: </span>10 placas (12 m2)</p>
						<p data-aos="fade-up" class="jost_regular"><span class="jost_medium">MONTAJE: </span>Macho/hembra</p>
						<p data-aos="fade-up" class="jost_regular"><span class="jost_medium">ACABADO: </span>Barniz mate</p>
						<p data-aos="fade-up" class="jost_regular"><span class="jost_medium">ACCESORIOS: </span>Remates</p>
					</div>

					<div class="col-sm-6 content_caracteristicas">
						<p data-aos="fade-up" class="jost_regular"><span class="jost_medium">LIMPIEZA: </span>Paño húmedo con solución de 50% água y 50% alcohol</p>
						<p data-aos="fade-up" class="jost_regular"><span class="jost_medium">EXPOSICIÓN SOLAR: </span>No indicado</p>
					</div>

					<div class="col-md-12 content_img_medidas">
						<img 
							data-aos="fade-up"
							class="img-fluid" 
							src="<?= BASE ?>img/productos/medidas.png" 
							alt="cielorrasos teto vinilico argentina medidas">
					</div>
								
				</div>
			</div>
				
			</div>

		</section>
		<!-- Especificaciones Técnicas end -->

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