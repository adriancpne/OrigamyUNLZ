<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php include 'include/bootsrap.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Estudiante</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
     <?php
     session_start();
      include 'include/Menu.php';
      include 'include/conexion.php';    
       $mensaje = 'Ingrese los nuevos datos';
       if(isset($_GET['mensaje'])){
           if($_GET['mensaje']=='uno'){$mensaje = 'El Estudiante ya existe en la base';}
       }
          
     ?>


</head>
<body class="container" background="img/descarga2.jpg">
    <div style="margin-top:40px;"> </div>
    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert" style="background-color: #f3e5f5; border: #c3dcdd; border-radius: 5px;">
        <h5 class="text-center">Alta Nuevo Estudiante</h5>
    </div>     

    <!-- Formulario -->
    <div class="container">
       <div class="row">
            <div class="col-3"></div>
            <div class="col-6" style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
                <form action="alta_estudiante_sql.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Ingrese apellido" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fnac">Fecha Nacimiento</label>
                        <input type="date" id="fnac" name="fnac" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" id="dni" name="dni" placeholder="Ingrese DNI" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tel">Telefono</label>
                        <input type="text" id="tel" name="tel" placeholder="Ingrese Telefono" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Ingrese Email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="becado">Becado</label>
                        <select id="becado" name="becado" class="form-control">
                        <option value="si" selected="selected">SI</option>
                        <option value="no">NO</option>
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


    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>