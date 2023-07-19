<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'distribuidores';
  $product = '-';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Contamos con distintos distribuidores en Argentina donde podés realizar tu consulta de forma directa y cotizar sus proyectos.">
	<title>Teto Vinílico - DISTRIBUIDORES | Cielorrasos Premium</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

</head>
<body>

	<!-- Spinner -->
	<?php include('includes/spinner.inc.php'); ?>
	
	<!-- Tag Manager Body -->
	<?php include_once('includes/tag_manager_body.php'); ?>

	<!-- Contenido DISTRIBUIDORES -->
	<section id="app" class="home distribuidores">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Slide -->
		<section data-aos="fade-up" class="container-fluid slide">
			<div class="row">
				<div class="col-md-12 content">
					<img class="img-fluid" src="<?= BASE ?>img/distribuidores/header-distribuidores.jpg" alt="ditribuidores de teto vinilico argentina cielorrasos premium">
					<div class="content_data">
						<h1>DISTRIBUIDORES</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- Slide end -->

		<!-- Descripción -->
		<section data-aos="fade-up" class="container descripcion">
			<div class="row">
				<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
					<p class="raleway_regular">
						Contamos con distintos distribuidores en Argentina donde podés realizar tu consulta de forma directa y cotizar sus proyectos.
						<span class="raleway_medium">Buscá el distribuidor más cercano:</span>
					</p>
				</div>
			</div>
		</section>
		<!-- Descripción end -->

		<!-- Tarjetas -->
		<section class="container tarjetas">
			<div class="row">

				<div class="col-md-12 col-lg-10 offset-lg-1">
					<div class="row">

						<div data-aos="fade-up" class="col-md-6">
							<div class="content_card">
								
								<h4 class="title raleway_bold">Depisos.com</h4>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-location-dot"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://goo.gl/maps/k9vhvhFbXUQZh8qm7">Calle 56 N°4575 - San Martín - Buenos Aires
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-phone"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="tel:541163790009">(+54) 11 6379 0009
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-brands fa-whatsapp"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://api.whatsapp.com/send?phone=+5491131861604&text=Hola!%20Necesito%20hacer%20una%20consulta!">(+54) 9 11 3186 1604
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-regular fa-envelope"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="mailto:info@depisos.com">info@depisos.com
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-globe"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://depisos.com/">depisos.com
									</a>
								</div>

							</div>

						</div>

						<div data-aos="fade-up" class="col-md-6">
							<div class="content_card">
								
								<h4 class="title raleway_bold">Ecodeck</h4>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-location-dot"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://goo.gl/maps/TJ6VSzcSp665ty9c6">Amenabar 618 - Belgrano - CABA
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-regular fa-envelope"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="mailto:info@ecodeck.com.ar">info@ecodeck.com.ar
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-globe"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="http://www.ecodeck.com.ar/">ecodeck.com.ar
									</a>
								</div>

							</div>
						</div>

						<div data-aos="fade-up" class="col-md-6">
							<div class="content_card">
								
								<h4 class="title raleway_bold">Nordeco</h4>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-location-dot"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://goo.gl/maps/k9vhvhFbXUQZh8qm7">Calle 56 N°4575 - San Martín - Buenos Aires
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-brands fa-whatsapp"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://api.whatsapp.com/send?phone=+5491153117118&text=Hola!%20Necesito%20hacer%20una%20consulta!">(+54) 9 11 5311 7118
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-regular fa-envelope"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="mailto:info@nordeco.com.ar">info@nordeco.com.ar
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-globe"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://nordeco.com.ar/">nordeco.com.ar
									</a>
								</div>

							</div>

						</div>

						<div data-aos="fade-up" class="col-md-6">
							<div class="content_card">
								
								<h4 class="title raleway_bold">Pietrapanel</h4>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-phone"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="tel:541147518193">(+54) 11 4751 8193
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-brands fa-whatsapp"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://api.whatsapp.com/send?phone=+5491153460803&text=Hola!%20Necesito%20hacer%20una%20consulta!">
											(+54) 9 11 5346-0803
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-globe"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://pietrapanel.com.ar/">
											pietrapanel.com.ar
									</a>
								</div>

							</div>
						</div>

						<div data-aos="fade-up" class="col-md-6">
							<div class="content_card">
								
								<h4 class="title raleway_bold">Pedraflex</h4>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-location-dot"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://goo.gl/maps/ei56jCKVg4K4zGTa9">Argentina N°4142 - San Justo - Buenos Aires
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-brands fa-whatsapp"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://api.whatsapp.com/send?phone=+5491157441044&text=Hola!%20Necesito%20hacer%20una%20consulta!">(+54) 9 11 5744 1044
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-regular fa-envelope"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="mailto:info@pedraflex.com.ar">info@pedraflex.com.ar
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-globe"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="noopener" 
										href="http://pedraflex.com.ar/">pedraflex.com.ar
									</a>
								</div>

							</div>
						</div>

						<div data-aos="fade-up" class="col-md-6">
							<div class="content_card">
								
								<h4 class="title raleway_bold">Polistore</h4>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-location-dot"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://goo.gl/maps/ASnUErkgQKM4LutP6">Av. Diaz Velez 1867 - Lomas del Mirador - Buenos Aires
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-phone"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="tel:541144885953">+54 11 44885953 / +54 11 44886015
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-regular fa-envelope"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="mailto:ventas@polistore.com.ar">ventas@polistore.com.ar
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-solid fa-globe"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://polistore.com.ar/">polistore.com.ar
									</a>
								</div>

								<div class="content_item">
									<div class="icon"><i class="fa-brands fa-instagram"></i></div>
									<a
										class="transition"
										target="_blank" 
										rel="referral" 
										href="https://www.instagram.com/polistorearg/">@polistorearg
									</a>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- Tarjetas end -->

		<!-- Ser Parte -->
		<?php include_once('./includes/modulo-ser-parte.php'); ?>

	</section>
	<!-- Contenido DISTRIBUIDORES end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="<?= BASE ?>dist/bundle.js"></script>

</body>

</html>