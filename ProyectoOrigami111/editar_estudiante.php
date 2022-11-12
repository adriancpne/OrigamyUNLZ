<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Archivos a incluir -->
    <?php
     session_start();
      include 'include/Menu.php';
      include 'include/conexion.php'; 

       if ((isset($_SESSION['login']))) {
        $id = $_GET['idContacto'];
        $becado = $_GET['becado'];
    ?>
</head>

<body class="container"  background="img/descarga2.jpg">
    <div style="margin-top:40px;"> </div>
    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert" style="background-color: #f3e5f5; border: #c3dcdd; border-radius: 5px;">
        <h5 class="text-center">Editar Estudiante</h5>
    </div>     

    <!-- Formulario -->
    <div class="container">
       <div class="row">
            <div class="col-3"></div>
            <div class="col-6" style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
                <form action="editar_estudiante_sql.php" method="post">
                    <div class="form-group">
                        <label for="id_datos_contacto">ID</label>
                        <input type="text" id="id_datos_contacto" name="id_datos_contacto" readonly value="<?php echo $id; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="becado">Becado</label>
                        <select id="becado" name="becado" class="form-control">
                        <option value="si" selected="selected">SI</option>
                        <option value="no">NO</option>
                    </select>
                    <div class="submit_container clear">
                         <button type="submit" class="formEmailButton" name="boton" value=1 style="border-radius:5px;border: 1px solid; padding:4px; border-color: darkgray">Modificar registro</button>
                         <button type="submit" class="formEmailButton" name="boton" value=0 style="border-radius:5px;border: 1px solid; padding:4px; border-color: darkgray">Cancelar la edicion</button>  
                  </div>
                </form>
            </div>
            <div class="col-3"></div>
       </div>
    </div>


    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<?php } else header("Location: index.php"); ?>
</body>
</html>