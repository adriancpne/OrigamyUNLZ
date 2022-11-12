<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php include( 'Include/Menu.php');?>

</head>
<body class="container">
	<?php menu(); ?>

	<!-- Titulo de la página-->
	<div class="alert-dark" role="alert">
		<h5 class="text-center">Envio de datos al servidor</h5>
	</div>

	<!-- Formulario -->
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
			
			<form action="formulario_recepcion.php" method="post">
				<hr size="2px" color="black">
				<div class="form-group">
					<label for="nombre">Nombre del usuario.</label>
					<input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" class="form-control">
				</div>
				<div class="form-group">
					<label for="apellido">Apellido del usuario.</label>
					<input type="text" id="apellido" name="apellido" placeholder="Ingrese su Apellido" class="form-control">
				</div>
				<div class="form-group">
					<label for="apellido">Clave de usuario.</label>
					<input type="password" id="clave" name="clave" placeholder="Ingrese su Clave" class="form-control">
				</div>
				<hr size="2px" color="black">

				<h6>Seleccione sus materias favoritas.</h6>
				<div class="form-group">
					<input type="checkbox" id="materia1" name="materia1" value="php">
					<label for="materia1">Aplicaciones web</label>
				</div>
				<div class="form-group">
					<input type="checkbox" id="materia2" name="materia2" value="java">
					<label for="materia2">Java</label>
				</div>
				<div class="form-group">
					<input type="checkbox" id="materia3" name="materia3" value="asp.net">
					<label for="materia1">Asp.net</label>
				</div>
				<hr size="2px" color="black">

				<fieldset>
					<legend>Seleccione su nivel de inglés</legend>
					<div class="form-group">
						<input type="radio" name="nivel" value="alto">Alto
					</div>
					<div class="form-group">
						<input type="radio" name="nivel" value="medio">Medio
					</div>
					<div class="form-group">
						<input type="radio" name="nivel" value="bajo">Bajo
					</div>
				</fieldset>
				<hr size="2px" color="black">

				<div class="form-group">
					<label for="motivo">Seleccione el motivo de contacto.</label>
					<select name="motivo" id="motivo">
						<option value="consulta">Consulta</option>
						<option value="sugerencia">Sugrencia</option>
						<option value="queja">Queja</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary btn-block">Enviar</button>

			</form>
		</div>
		<div class="col-2"></div>
	</div>
	
	<!-- JavaScript -->
	<script src="jquery/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>