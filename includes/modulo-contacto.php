<!-- Formulario de Contacto -->
<section class="container-fluid modulo_contacto">
	<div class="container">
		<div class="row">

			<div data-aos="fade-up" class="col-md-12 formulario">
				<h2>ESTAMOS EN <span>CONTACTO</span></h2>
			</div>

			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 content_formulario">
				
				<!-- Mensages -->
				<?php include_once('./includes/msg.php'); ?>

				<!-- Errors -->
				<?php include_once('./includes/errors.php'); ?>

				<form id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

					<input name="origin" type="hidden" value="Formulario de Contacto">
					<input name="current" type="hidden" value="<?= $current_filename ?>">

					<?php 
						include_once('./includes/parts/input-name.php');
						include_once('./includes/parts/input-email.php');
						include_once('./includes/parts/input-phone.php');
						include_once('./includes/parts/input-comments.php');
						include_once('./includes/parts/btn-send.php');
					?>

				</form>
			</div>

		</div>

	</div>
</section>
<!-- Formulario de Contacto end -->