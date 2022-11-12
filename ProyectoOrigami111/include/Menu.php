<?php
	function menu () {?>
		<div style="margin-top:40px;"> </div>
		<nav class="navbar navbar-expand-lg navbar-light stiky-top" style="background-color: #f3e5f5; border: #c3dcdd; border-radius: 5px;">
			<div class= "container">

				<a class="navbar-brand" href="index.php">Escuela de Origami</a>
           		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                	<span class="navbar-toggler-icon"></span>
            	</button>

				<div class="collapse navbar-collapse" id="navbarResponsive">
           			<ul class="navbar-nav ml-auto">
           				<?php if (!isset($_SESSION['login'])) :?>
						<li class="nav-item active">
							<a class="nav-link" href="historia.php">Historia</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="equipo.php">Equipo</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="servicio.php">Servicio</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="contacto.php">Contacto</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="suscribirse.php">Suscribirse</a>
						</li>
						<li class="nav-item active">		
							<a class="nav-link" href="tienda.php">Tienda</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="login.php">Loguearse</a>
						</li>
						<?php else :?>
						<li class="nav-item active">
							<div class="dropdown show nav-link" >
							  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #f3e5f5;border: #c3dcdd; border-radius: 5px; color: black;">ABM</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <a class="dropdown-item" href="bdd_producto.php">Producto</a>
							    <a class="dropdown-item" href="bdd_empleado.php">Empleado</a>
							    <a class="dropdown-item" href="bdd_estudiante.php">Estudiante</a>
							  </div>
							</div>
						</li>
						<li class="nav-item active">
							<div class="dropdown show nav-link" >
							  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #f3e5f5;border: #c3dcdd; border-radius: 5px; color: black;">BUZON</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <a class="dropdown-item" href="buzon.php">Contacto</a>
							    <a class="dropdown-item" href="buzon.php">Suscripcion</a>
							  </div>
							</div>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="logout.php">CERRAR SESION</a>
						</li>							
						<?php endif;?>

					</ul>
				</div>

			</div>
		</nav>

	<?php
	;}
?>