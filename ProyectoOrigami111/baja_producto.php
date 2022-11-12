<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
    <?php   session_start();
      include 'include/Menu.php';
      include 'include/conexion.php';

       if ((isset($_SESSION['login']))) { 
        // Recibir los datos por la URL
        $codigo = $_GET['codigo'];
        $descripcion = $_GET['descripcion'];
        $precio = $_GET['precio'];


    ?>
</head>

<body class="container">

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Baja de registro.</h5>
    </div>     

    <!-- Formulario -->
    <div class="container">
       <div class="row">
            <div class="col-3"></div>
            <div class="col-6" style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
                <form action="baja_producto_sql.php" method="post">
                    <div class="form-group">
                        <label for="codigo">Codigo.</label>
                        <input type="text" id="codigo" name="codigo" readonly value="<?php echo $codigo; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion.</label>
                        <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio.</label>
                        <input type="number" id="precio" name="precio" value="<?php echo $precio; ?>" class="form-control">
                    </div> 
                   <div class="submit_container clear">
                         <button type="submit" class="formEmailButton" name="boton" value=1 >Eliminar registro</button>
                         <button type="submit" class="formEmailButton" name="boton" value=0 >Cancelar la Baja</button>  
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


