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
 if (!(isset($_SESSION['login']))){
 ?>

</head>
<body class="container" background="img/descarga2.jpg">
	<?php menu(); ?>
	<div style="margin-top:40px; "> </div>
	<div style="background-color: #f3e5f5; padding: 20px;">
		<h3 align="center" style="padding: 6px;">¿De donde surge el Origami?</h3>
		<br>
		<p>El origen del Origami. Pensamos que es originario de Japón, y algunos lo definen como el arte japonés que se forma doblando hojas de papel. En realidad, no se originó en Japón sino en China alrededor del siglo primero o segundo y no fue sino hasta el siglo sexto que llegó a Japón llevado ahí por los monjes.</p>
		<p>
		El papel no era tan sencillo de conseguir, el papel hecho a mano era accesible solo a la clase rica y privilegiada y por supuesto a la clase religiosa por lo que en un principio el origami se utilizaba únicamente con fines religiosos, y en importantes ceremonias.</p>
		<p>
		Poco a poco las diferentes técnicas de fabricación de papel lograron que el origami fuera permeando a las clases menos afortunadas pero igual de creativas y hábiles en la formación de figuras.</p>
	</div>

	<!-- JavaScript -->
	<script src="jquery/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php } else header("Location: index.php"); ?>
</body>
</html>