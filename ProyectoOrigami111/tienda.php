<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tienda</title>

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php
    session_start();
    include 'include/Menu.php';
    include 'include/conexion.php';
	include 'include/MenuTienda.php';
    if (!(isset($_SESSION['login']))) { ?>

</head>
<body class="container" background="img/descarga2.jpg" >
	<div > 
		<?php menu(); ?>
	</div>
	<div class="container"> 
		<div style="padding: 2em">
			<hr size="2px" color="silver">
			<?php menuTienda(); ?>
			<hr size="2px" color="silver">
		</div>
		<div align="center" style="padding: 1em;color:#9CA1B0"><h3>PRODUCTOS DESTACADOS</h3></div>
		<div class="row">
			<div class="col-3">
				<div><img src="img/producto1.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">DuoColorTexture 24 colores<br></div>
				</div>
				<div><img src="img/producto2.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">DuoColorTexture 23 morado<br></div>
				</div>
				<div><img src="img/producto3.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Lucky Star-FoilPaper surtido<br></div>
				</div>
			</div>
			<div class="col-3">
				<div><img src="img/producto4.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Tesel cintas multicolor</div>
				</div>
				<div><img src="img/producto5.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Tesel Asanoha bifaz<br></div>
				</div>
				<div><img src="img/producto6.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Papel para lámparas<br></div>
				</div>
			</div>
			<div class="col-3">
				<div><img src="img/producto7.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Tijera Grulla Plata</div>
				</div>
				<div><img src="img/producto8.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Jardín encantado</div>
				</div>
				<div><img src="img/producto9.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Dobladora de Bambú - Tradicional</div>
				</div>
			</div>
			<div class="col-3">
				<div><img src="img/producto10.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Bolsa de origami</div>
				</div>
				<div><img src="img/producto11.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Mineral Paper - Waterproof</div>
				</div>
				<div><img src="img/producto12.jpg" alt="..." class="img-thumbnail">
					<div align="center" style="margin-bottom:1em ">Grullas Caladas Asanoha by Pink</div>
				</div>
			</div>		
		</div>	
	</div>
	<!-- JavaScript -->
	<script src="jquery/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php } else header("Location: index.php"); ?>
</body>
</html>