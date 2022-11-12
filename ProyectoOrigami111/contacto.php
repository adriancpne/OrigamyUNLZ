<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Historia</title>

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php
    session_start();
    include 'include/Menu.php';
    include 'include/conexion.php';

    if (!(isset($_SESSION['login']))) { ?>

</head>
<body class="container" background="img/descarga2.jpg">
	<?php menu(); ?>
	
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
		<div style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
				<form method="post" action="contacto_sql.php">
				  <div class="form-group">
				    <label for="correo">E-mail</label>
				    <input type="email" class="form-control" id="correo"  name= "correo" placeholder="Ingrese su correo." required="required">
				  </div>
				  <div class="form-group">
				    <label for="mensaje">Mensaje</label>
				    <input type="texbox" class="form-control" id="mensaje"  name= "mensaje" style=" height: 200px;"  required="required">
				  </div>
				  <div class="submit_container clear">
				        <input type="submit" class="formEmailButton" name="submit" value="Enviar">
				  </div>
				</form>
					</div>	
			</div>
			<div class="col-2"></div>
		</div>


	<!-- JavaScript -->
	<script src="jquery/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php } else header("Location: index.php"); ?>
</body>
</html>