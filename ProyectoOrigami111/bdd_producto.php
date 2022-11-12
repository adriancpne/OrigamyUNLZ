<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <!-- ARCHIVO CON ESTILOS ONLINE-->
    <?php include 'include/bootsrap.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ABM Producto</title>

<!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 

<!-- Archivos a incluir -->
<?php session_start();
    include 'include/Menu.php';
	include 'include/conexion.php';
	
		// Consultas Query
		$consulta1 = 'select distinct * from datos_bys where vigente = 1';

        // Paso 5) Ejecutamos las consultas.
        $resultado_query1 = mysqli_query($conexion,$consulta1)
        or die('Error en la Query');

        // Paso 6) Cerramos la conexion
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
            <?php if (isset($_SESSION['login'])) :?>   
            <div class='col-3'>
                <button type="button" class="btn btn-danger btn-block">
                    <a href="alta_producto.php" style="color:white;" target="blank">Nuevo Producto</a>
                </button>
            </div>
            <?php endif;?>                         
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
                            <td>Código</td><td>Descripción</td><td>Precio</td><td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                            
                            while($query1 = mysqli_fetch_array($resultado_query1)){
                                echo "<tr>";
                                    echo "<td>".$query1['codigo']."</td>";
                                    echo "<td>".$query1['descripcion']."</td>";
                                    echo "<td>".$query1['precio']."</td>";
                                    if (isset($_SESSION['login'])) :
                                    echo "<td>
                                            <a href='editar_producto.php?codigo=".$query1['codigo']."
                                            &descripcion=".$query1['descripcion']."
                                            &precio=".$query1['precio']."
                                            ' target='blank'>Editar</a>
                                            |
                                            <a href='baja_producto.php?codigo=".$query1['codigo']."
                                            &descripcion=".$query1['descripcion']."
                                            &precio=".$query1['precio']."
                                            ' target='blank'>Eliminar</a>
                                         </td>";
                                     	else :
                                     	echo "<td>
                                            <a href='comprar_producto.php?codigo=".$query1['codigo']."
                                            &descripcion=".$query1['descripcion']."
                                            &precio=".$query1['precio']."
                                            ' target='blank'>Comprar</a></td>";
                                      endif;
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    

</body>
</html>