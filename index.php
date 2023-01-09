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
		<section class="container-fluid slide">
			<div class="row">
				<div class="col-md-12">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident a officiis aliquam id cupiditate quam, qui, pariatur enim sapiente molestiae ipsum in. Distinctio amet dolor consequuntur repudiandae dolores quasi, illum?
				</div>
			</div>
		</section>
		<!-- Slide end -->

	</section>
	<!-- Contenido HOME end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>