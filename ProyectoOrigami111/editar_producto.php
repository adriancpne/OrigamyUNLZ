<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Archivos a incluir -->
    <?php 

      session_start();
      include 'include/Menu.php';
      include 'include/conexion.php';  

      if ((isset($_SESSION['login']))) {

        // Recibir los datos por la URL
        $codigo = $_GET['codigo'];
        $descripcion = $_GET['descripcion'];
        $precio = $_GET['precio'];
    ?>
</head>

<body class="container"  background="img/descarga2.jpg">
    <div style="margin-top:40px;"> </div>
    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert" style="background-color: #f3e5f5; border: #c3dcdd; border-radius: 5px;">
        <h5 class="text-center">Editar registro.</h5>
    </div>     

    <!-- Formulario -->
    <div class="container">
       <div class="row">
            <div class="col-3"></div>
            <div class="col-6" style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
                <form action="editar_producto_sql.php" method="post">
                    <div class="form-group">
                        <label for="codigo">Codigo.</label>
                        <input type="text" id="codigo" name="codigo" readonly value="<?php echo trim($codigo); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion.</label>
                        <input type="text" id="descripcion" name="descripcion" value="<?php echo trim($descripcion); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio.</label>
                        <input type="number" id="precio" name="precio" value="<?php echo trim($precio); ?>" class="form-control">
                    </div> 
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


