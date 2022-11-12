<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Equipo</title>

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php session_start();
 include 'include/Menu.php';
 if (!(isset($_SESSION['login']))){?>

</head>
<body class="container" background="img/descarga2.jpg">
<?php menu(); ?>

	<div style="margin-top:40px; "> </div>
		
	<div style="background-color: #f3e5f5; padding: 20px;">
		<h5 class="text-center" style=" padding: 10px;">Nuestro equipo</h5>
		<p style=" padding: 10px;">Con el objetivo de saber cuál era la aplicación y el alcance que tiene el origami en la educación, surge un arduo trabajo de investigación y recopilación de datos, lo cual nos abrió varios caminos y vislumbramos miles de usos del mismo que nos hizo entender lógica y claramente  la necesidad imperante de su uso en la educación. Porque como dijo Confucio “Lo que se oye se olvida, lo que se ve se recuerda, y lo que se hace se aprende”.</p>
		<p>Muchas personas, aunque exitosas en distintas áreas del conocimiento, se sienten intimidadas cuando deben responder a situaciones que exigen creatividad y esto es porque piensan que la creatividad es propia de ciertas profesiones o de ciertas áreas del conocimiento.</p>
		<p>La realidad es que pensar que alguien no pueda ser creativo no es más que un patrón mental, cada cerebro tiene la capacidad de ser creativo y de proyectar nuevas ideas.</p>
		<p>Es por ello que a partir de este trabajo se pretende romper con determinados patrones mentales, que impiden la posibilidad de una educación integral.</p>
		<p>“El proceso de aprendizaje del estudiante debe basarse en su propia actividad creadora, en sus descubrimientos personales, en sus motivaciones intrínsecas, debiendo ser la función del profesor la de orientar, guiar, animar, pero no la fuente fundamental de información”("Martínez recio y otros, 2004, “matemáticas: cultura y aprendizaje”).</p>
	</div>
	<!-- JavaScript -->
	<script src="jquery/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php } else header("Location: index.php"); ?>
</body>
</html>