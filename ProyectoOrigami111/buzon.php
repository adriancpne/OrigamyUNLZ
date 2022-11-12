<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BUZON</title>

    <link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body class="container" background="img/descarga2.jpg" >
	
	<div class="container"> 
		<?php
		session_start();
		include 'include/Menu.php';
		include 'include/conexion.php';
		 menu(); 

	if ((isset($_SESSION['login']))) {  	
      	$consulta1 = 'select distinct * from mensajes where leido="false"';
      	$resultado_query1 = mysqli_query($conexion,$consulta1);
		 ?>
    </div>
    <br>
    <!-- TABLA -->
	 <div class='container'>
        <div class='row'>
            <div class='table-responsive'>
                <table class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
                            <td>FECHA</td><td>REMITENTE</td><td>ACCION</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                            
                            while($query1 = mysqli_fetch_array($resultado_query1)){
                                echo "<tr>";
                                    echo "<td>".$query1['fecha']."</td>";
                                    echo "<td>".$query1['email']."</td>";
                                    echo "<td>
                                            <a href='ver_mensaje.php?codigo=".$query1['id']."'>LEER</a>
                                             |
                                            <a href='borrar_mensaje.php?codigo=".$query1['id']."
                                             '>BORRAR</a>
                                             </td>";
                                     	
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
	</div>
	<?php
	 } else header("Location: index.php"); ?>
</body>
</html>