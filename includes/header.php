<?php  ?>
<header class="container-fluid">

	<div class="container">
		
		<div class="row">
			<div class="col-md-12 content">

				<a href="./">
					<img class="logo img-fluid" src="<?= BASE ?>img/header/teto-vinilico-logo.png" alt="logo teto vinilico">
				</a>
				<i id="btn_menu" class="fa-solid fa-bars"></i>

				<nav>
					<ul>

						<li>
							<a class="<?=($current === 'home') ? 'active' : ''?> transition" href="<?= BASE ?>">Home</a>
						</li>

						<li class="<?=($current === 'productos') ? 'active' : ''?>" id="products">
							<span id="btn_menu_products" class="transition">Productos<i id="arrow_product" class="fa-solid fa-angle-down"></i></span>
							<ul id="content_products">
								<li>
									<a class="<?=($product === 'linea_origens') ? 'active' : ''?> transition" href="<?= BASE ?>linea-origenes.php">Línea Origens</a>
								</li>
								<li>
									<a class="<?=($product === 'linea_plus') ? 'active' : ''?> transition" href="<?= BASE ?>linea-plus.php">Línea Plus</a>
								</li>
								<li>
									<a class="<?=($product === 'linea_woods') ? 'active' : ''?> transition" href="<?= BASE ?>linea-woods.php">Línea Woods</a>
								</li>						
							</ul>
						</li>

						<li>
							<a class="<?=($current === 'empresa') ? 'active' : ''?> transition" href="<?= BASE ?>empresa.php">Empresa</a>
						</li>

						<li>
							<a class="<?=($current === 'distribuidores') ? 'active' : ''?> transition" href="<?= BASE ?>empresa.php">Distribuidores</a>
						</li>

						<li>
							<a class="<?=($current === 'contacto') ? 'active' : ''?> transition" href="<?= BASE ?>contacto.php">Contacto</a>
						</li>

					</ul>
				</nav>

			</div>
		</div>

	</div>

</header>