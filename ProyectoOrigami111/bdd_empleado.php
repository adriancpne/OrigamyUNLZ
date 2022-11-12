<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!-- ARCHIVO CON ESTILOS ONLINE-->
    <?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ABM Empleado</title>

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php
    session_start(); 
	include 'include/Menu.php';
	include 'include/conexion.php';
	
	if ((isset($_SESSION['login']))) {    
		// Consultas Query
		$consulta1 = 'select distinct * from datos_contacto where vigente = 1';

        // Ejecutamos las consultas.
        $resultado_query1 = mysqli_query($conexion,$consulta1)
        or die('Error en la Query');

        // Cerramos la conexion
        mysqli_close($conexion);
?>
</head>


<body class="container" background="img/descarga2.jpg">
	<?php menu(); ?>
	<br>
    <!-- Primer fila -->
    <div class='container'>
        <div class='row'>
            <div class=col-9> </div>   
            <div class='col-3'>
                <button type="button" class="btn btn-danger btn-block">
                    <a href="alta_empleado.php" style="color:white;" target="blank">Nuevo Empleado</a>
                </button>
            </div>                         
        </div>    
    </div>
    <br>
    <!-- TABLA -->
	 <div class='container'>
        <div class='row'>
            <div class='table-responsive'>
                <table class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
                           <td>ID</td><td>Nombre</td><td>Apellido</td><td>Rol</td>
                           <td>Cargo</td><td>Sueldo</td><td>ACCIONES</td>
                        </tr>
                    </thead>
                    <tbody>
                       <?php                            
                            while($query1 = mysqli_fetch_array($resultado_query1)){
                                echo "<tr>";
                                    echo "<td>".$query1['id']."</td>";
                                    echo "<td>".$query1['nombre']."</td>";
                                    echo "<td>".$query1['apellido']."</td>";
                                    $rol = $query1['rol'];

//CONSULTA PARA LEVANTAR EL ROL DEL EMPLEADO
                include 'include/conexion.php';                                
                 $consulta2 = "select nombre from roles where id = '$rol'"; 
                $resultado_query2 = mysqli_query($conexion,$consulta2);
                $query2=   mysqli_fetch_array($resultado_query2);
                mysqli_close($conexion);            
//FIN CONSULTA
                                    echo "<td>".$query2['nombre']."</td>";
                                    echo "<td>".$query1['cargo']."</td>";
                                    echo "<td>".$query1['sueldo']."</td>";
                                    if (isset($_SESSION['login']) && $query1['id'] != 1 ) :
                                    echo "<td>
                                            <a href='editar_empleado.php?id=".$query1['id']."
                                            &cargo=".$query1['cargo']."
                                            &rol=".$query1['rol']."
                                            &sueldo=".$query1['sueldo']."
                                            ' target='blank'>Editar</a>
                                            |
                                            <a href='baja_empleado.php?id=".$query1['id']."
                                            &cargo=".$query1['cargo']."
                                            &rol=".$query1['rol']."
                                            &sueldo=".$query1['sueldo']."
                                            ' target='blank'>Eliminar</a>
                                         </td>";
                                        endif;
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    

	<!-- JavaScript -->
	<script src="jquery/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php } else header("Location: index.php"); ?>

</body>
</html>