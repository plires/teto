<footer>
	<div class="container-fluid">
		<div class="container">

			<div class="row">

				<div class="col-md-3 logo_footer">
					<img 
						class="img-fluid" 
						src="<?= BASE ?>img/footer/teto-vinilico-logo-footer.png" 
						alt="logo teto vinilico footer">
				</div>

				<div class="col-md-6 menu">
					<ul>
						<li><a target="_blank" rel="noopener" class="transition" href="<?= BASE ?>linea-origens.php">PRODUCTOS</a></li>
						<li><a target="_blank" rel="noopener" class="transition" href="<?= BASE ?>empresa.php">EMPRESA</a></li>
						<li><a target="_blank" rel="noopener" class="transition" href="<?= BASE ?>distribuidores.php">DISTRIBUIDORES</a></li>
						<li><a target="_blank" rel="noopener" class="transition" href="<?= BASE ?>contacto.php">CONTACTO</a></li>
					</ul>
				</div>

				<div class="col-md-3 rrss">
					
					<a 
						class="transition" 
						target="_blank" 
						rel="noopener" 
						href="<?= $_ENV['INSTAGRAM_CLIENT'] ?>">
							<i class="fa-brands fa-square-instagram"></i>
					</a>

					<a 
						class="transition" 
						target="_blank" 
						rel="noopener" 
						href="<?= $_ENV['FACEBOOK_CLIENT'] ?>">
							<i class="fa-brands fa-square-facebook"></i>
					</a>

					<a 
						class="transition" 
						target="_blank" 
						rel="noopener" 
						href="<?= $_ENV['WHATSAPP_CLIENT'] ?>">
							<i class="fa-brands fa-square-whatsapp"></i>
					</a>

				</div>

			</div>
					
		</div>
	</div>

	<div class="container-fluid libre">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a class="transition" target="_blank" rel="noopener" href="https://librecomunicacion.net/">by LIBRE</a>
				</div>
			</div>
		</div>
	</div>

</footer>