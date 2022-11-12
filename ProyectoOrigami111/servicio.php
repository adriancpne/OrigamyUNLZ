<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Servicios</title>
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php session_start();
 include 'include/Menu.php';
 if (!(isset($_SESSION['login']))){?>
	
</head>
<body background="img/descarga2.jpg" >
	<div class="container"> 
		<?php menu(); ?>
	<div style="margin-top:40px; "> </div>
	<div align="center" style="background-color: #f3e5f5; padding: 40px;">
			<ul class="list-unstyled">
		  <li><h3>SERVICIOS</h3>
		  <li>Cursos y Capacitaciones anuales o eventuales</li>
		    <ul class="list-unstyled">
		      <li><b>*</b> para docentes</li>
		      <li><b>*</b> por edades</li>
		      <li><b>*</b> terapeuticos</li>
		      <li><b>*</b> emprendedores</li>
		    </ul>
		  </li>
		  <li><h4>Servicios para empresas</h4></li>
		  <li>Talleres para personal</li>
		  <li>Demo de Origami para eventos</li>
		</ul>
	</div>
	</div>
	</div>

	<!-- JavaScript -->
	<script src="jquery/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<?php } else header("Location: index.php"); ?>
</body>
</html>
	