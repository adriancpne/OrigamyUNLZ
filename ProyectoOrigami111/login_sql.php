<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php session_start();
include 'include/Menu.php';?>

</head>
<body class="container" background="img/descarga2.jpg" >
	
	<div class="container"> 
		<?php menu(); ?>
		<div>

		<?php
	include 'include/conexion.php';
    // Recibo los valores por POST.
	$p_email = $_POST['email'];
	$p_clave = $_POST['clave'];


   $consulta1 = "select * from datos_contacto WHERE email = '$p_email'
   				 AND password = '$p_clave'";

    $resultado1 = mysqli_query($conexion, $consulta1);
 	

    
     if($resultado1 && mysqli_num_rows($resultado1)==1){
        //$usuario = mysql_fetch_assoc($resultado1);
        ?>
        	<div class="alert alert-info">
			  <p>USUARIO CONECTADO</p>
			</div>
        <?php
        $_SESSION['login'] = 'conectado';
     }
     else{
     	?>
        	<div class="alert alert-danger">
			  <p>ERROR</p>
			</div>
		<?php }
		header("Location: index.php");
     	?>
		</div>	
	</div>
	<!-- JavaScript -->
	<script src="jquery/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>


