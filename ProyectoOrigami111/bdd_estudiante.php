<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <!-- ARCHIVO CON ESTILOS ONLINE-->
    <?php include 'include/bootsrap.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Estudiante</title>

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php 
    session_start(); 
	include 'include/Menu.php';
	include 'include/conexion.php';

	if ((isset($_SESSION['login']))) {
    
        // Consultas Query
        $consulta1 = 'select distinct * from datos_contacto where vigente = 1 and rol = 3';

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
            <div class='col-3'>
                <button type="button" class="btn btn-danger btn-block">
                    <a href="alta_estudiante.php" style="color:white;" target="blank">Nuevo Estudiante</a>
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
                            <td>ID</td><td>Nombre</td><td>Apellido</td><td>F.Nac</td>
                            <td>DNI</td><td>Telefono</td><td>Email</td><td>Becado</td>
                            <td>ACCIONES</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                            
                            while($query1 = mysqli_fetch_array($resultado_query1)){
                                echo "<tr>";
                                    echo "<td>".$query1['id']."</td>";
                                    echo "<td>".$query1['nombre']."</td>";
                                    echo "<td>".$query1['apellido']."</td>";
                                    echo "<td>".$query1['fecha_nac']."</td>";
                                    echo "<td>".$query1['dni']."</td>";
                                    echo "<td>".$query1['num_tel']."</td>";
                                    echo "<td>".$query1['email']."</td>";
if ($query1['becado'] == 0){
    $query1['becado'] = "NO";
}
else $query1['becado'] = "SI";
                                    echo "<td>".$query1['becado']."</td>";               
                                    echo "<td>
                                            <a href='editar_estudiante.php?idContacto=".$query1['id']."
                                            &becado=".$query1['becado']."
                                            ' target='blank'>Editar</a>
                                            |
                                            <a href='baja_estudiante.php?idContacto=".$query1['id']."
                                            &becado=".$query1['becado']."
                                            ' target='blank'>Eliminar</a>
                                         </td>";
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