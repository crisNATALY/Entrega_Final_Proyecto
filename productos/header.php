<header class="header trans_300">
	<div class="top_nav">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top_nav_left text-right" style="line-height: 30px !important;">
						<i class="fa fa-user" aria-hidden="true"></i>
						<a href="#" id="mi_cuenta">Mi Cuenta</a>
						<a href="#">Cris Nataly</a>
						<br>
						<a href="#"> Cerrar Sesión</a>
					</div>
				</div>
			</div>
		</div>
	</div>   
	<div class="main_nav_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-right">
					<div class="logo_container">
						<a href="./">
						<img src="assets/images/IMG.png" class="mi_logo">
						</a>
					</div>
					<nav class="navbar">
						<ul class="navbar_menu">
							<li><a class="nav-link" href="../index.php">Inicio</a></li>
							<li><a class="nav-link" href="../servicios.php">Servicios</a></li>
							<li><a class="nav-link" href="../nosotros.php">Nosotros</a></li>
							<li><a class="nav-link" href="../contacto.html">Contáctanos</a></li>
						</ul>
						<ul class="navbar_user">
							<li class="checkout">
								<a href="carrito.php">
									<img src="assets/images/icon.png" alt="icon" style="width: 20px; heigth:5px">
									<?php
									echo iconoCarrito($con);
									?>
								</a>
							</li>
						</ul>
						<a href="salir.php"> Cerrar Sesión</a>
						<div class="hamburger_container">
							<i class="bi bi-list"></i>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>


<div class="fs_menu_overlay"></div>
<div class="hamburger_menu">
	<div class="hamburger_close"><i class="bi bi-x-lg"></i></div>
	<div class="hamburger_menu_content text-right">
		<ul class="menu_top_nav">
			<li class="menu_item has-children">
				<a href="#">
					Mi Cuenta
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="menu_selection">
					<li><a href="#">Cris Nataly</a></li>
					<li><a href="#">Cerrar Sesión</a></li>
				</ul>
			</li>
			<li class="menu_item"><a href="./">Inicio</a></li>
			<li class="menu_item"><a href="./">Productos</a></li>
			<li class="menu_item"><a href="#">Premios</a></li>
		</ul>
	</div>
</div>