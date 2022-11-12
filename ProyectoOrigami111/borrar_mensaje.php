<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MENSAJES</title>


</head>
<body class="container" background="img/descarga2.jpg" >
	
	<div class="container"> 
		<?php
		session_start();
		include 'include/Menu.php';
		include 'include/conexion.php';
		 menu(); 

	if ((isset($_SESSION['login']))) {  

        $p_id =(int) $_GET['codigo'];

        $consulta2 = "select * from mensajes where id= $p_id";
        $resultado_query2 = mysqli_query($conexion,$consulta2);	

        $consulta3 = "update mensajes set leido=true where id= $p_id";
        $resultado_query3 = mysqli_query($conexion,$consulta3); 

         ?>
    <!-- TABLA -->
	 <div class='container'>
        <h2>MENSAJE BORRADO</h2>
	</div>
    <a href="buzon.php">VOLVER</a>
	<?php } else header("Location: index.php"); ?>
</body>
</html>