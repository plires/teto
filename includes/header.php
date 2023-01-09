<?php  ?>
<header class="container-fluid p-0">

	<div class="container">
		
		<div class="row">
			<div class="col-md-12 content">
				<a href="./">
					LOGO?
					<!-- <img class="logo" src="./img/header/logo-ewig.png" alt="logo ewig"> -->
				</a>
				<i id="btn_menu" class="fa-solid fa-bars"></i>
			</div>
		</div>

		<nav>
			<!-- <img class="logo_nav" src="./img/footer/logo-ewig-footer.png" alt="logo ewig nav"> -->
			LOGO
			<ul>

				<li>
					<a class="<?=($current === 'home') ? 'active' : ''?>" href="./">Home</a>
				</li>

				<li class="<?=($current === 'productos') ? 'active' : ''?>" id="products">
					<span id="btn_menu_products" class="open">Productos<i id="arrow_product" class="fa-solid fa-angle-down"></i></span>
					<ul id="content_products">
						<li>
							<a class="<?=($product === 'linea_origens') ? 'open' : ''?>" href="./linea-origenes.php">Línea Origens</a>
						</li>
						<li>
							<a class="<?=($product === 'linea_plus') ? 'open' : ''?>" href="./linea-plus.php">Línea Plus</a>
						</li>
						<li>
							<a class="<?=($product === 'linea_woods') ? 'open' : ''?>" href="./linea-woods.php">Línea Woods</a>
						</li>						
					</ul>
				</li>

				<li>
					<a class="<?=($current === 'empresa') ? 'active' : ''?>" href="./empresa.php">Empresa</a>
				</li>

				<li>
					<a class="<?=($current === 'contacto') ? 'active' : ''?>" href="./contacto.php">Contacto</a>
				</li>

			</ul>
		</nav>

	</div>

</header>