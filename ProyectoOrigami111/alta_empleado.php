<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- ARCHIVO CON ESTILOS ONLINE-->
	<?php include 'include/bootsrap.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Empleado</title>


     <!-- Archivos a incluir -->
     <?php
     session_start();
      include 'include/Menu.php';
      include 'include/conexion.php';  
       $mensaje = 'Ingrese los nuevos datos';
       if(isset($_GET['mensaje'])){
           if($_GET['mensaje']=='uno'){$mensaje = 'El Empleado ya existe en la base';}
       }
      
	if ((isset($_SESSION['login']))) {?>



</head>
<body class="container" background="img/descarga2.jpg">
    <div style="margin-top:40px;"> </div>
    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert" style="background-color: #f3e5f5; border: #c3dcdd; border-radius: 5px;">
        <h5 class="text-center">Alta Nuevo Empleado</h5>
    </div>     

    <!-- Formulario -->
    <div class="container">
       <div class="row">
            <div class="col-3"></div>
            <div class="col-6" style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
                <form action="alta_empleado_sql.php" method="post">
                    <div class="form-group">
                        <label for="idDatosContacto">Nombre</label>
                        <input type="text" id="idDatosContacto" name="nombre" placeholder="Ingrese nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idDatosContacto">Apellido</label>
                        <input type="text" id="idDatosContacto" name="apellido" placeholder="Ingrese apellido" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idDatosContacto">Fecha Nacimiento</label>
                        <input type="date" id="idDatosContacto" name="fnac" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idDatosContacto">DNI</label>
                        <input type="text" id="idDatosContacto" name="dni" placeholder="Ingrese DNI" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idDatosContacto">Telefono</label>
                        <input type="text" id="idDatosContacto" name="tel" placeholder="Ingrese telefono" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idDatosContacto">Email</label>
                        <input type="text" id="idDatosContacto" name="email" placeholder="Ingrese email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idDatosContacto">CLAVE</label>
                        <input type="text" id="idDatosContacto" name="clave" placeholder="Ingrese Clave" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sueldo">Sueldo</label>
                        <input type="number" id="sueldo" name="sueldo" placeholder="Ingrese el sueldo" class="form-control">
                    </div>             
                    <div class="submit_container clear">
                      <input type="submit" class="formEmailButton" name="submit" value="Cargar">
                    </div>
                    <?php echo $mensaje; ?>   
                  </div>
                </form>
            </div>
            
            <div class="col-3"></div>
       </div>
    </div>
<?php } else header("Location: index.php"); ?>
</body>
</html>
