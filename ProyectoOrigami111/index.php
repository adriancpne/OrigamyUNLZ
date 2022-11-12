<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index Origami</title>


<!-- Archivos a incluir -->
<?php include 'include/Menu.php';?>

</head>
<body class="container" background="img/descarga2.jpg" >
	
	<div class="container"> 
		<?php
		session_start();
		 menu(); ?>
		<div>
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<!-- No estaria funcionando la calecita -->
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
					  <img src="img/CursoTaller.jpg" class="d-block w-100" width="1200" height="500" alt="Responsive image">
				      <div class="carousel-caption d-none d-md-block" style="color:#800000">
				        <h2>Cursos y Talleres</h2>
				        <h4>Para desarrollo personal o profecional brindamos ofertas educativas, recreativas y terapeuticas</h4>
				      </div>					  
				    </div>
				    <div class="carousel-item">
				      <img src="img/accesorios.jpg" class="d-block w-100" width="1200" height="500" alt="Responsive image">
				      <div class="carousel-caption d-none d-md-block" style="color:#3CB371; text-shadow: 1px 1px black">
				        <h2>Insumos y materiales</h2>
				        <h5>En nuestra tienda encontrás todo lo materiales para desarrollar tu creatividad al máximo. Gran diversidad en colores, tamaños, texturas de papeles y todos los útiles y accesorios.</h5>
				      </div>
				    </div>
				    <div class="carousel-item">
					  <img src="img/quedateEnCasa.jpg" class="d-block w-100" width="1200" height="500" alt="Responsive image">
				      <div class="carousel-caption d-none d-md-block" style="color:black; text-shadow: 5px 5px 5px silver">
				        <h1>#QuedateEnCasa</h1>
				        <h3>Comprá online y recibilo en tu domicilio </h3>
				      </div>				      
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
		</div>	
	</div>
	
</body>
</html>