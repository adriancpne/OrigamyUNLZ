<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
      <?php
     session_start();
      include 'include/Menu.php';
      include 'include/conexion.php';
       $mensaje = 'Ingrese los nuevos datos';
       if(isset($_GET['mensaje'])){
           if($_GET['mensaje']=='uno'){$mensaje = 'El Producto ya existe en la base';}
       }
      
      if ((isset($_SESSION['login']))) {?>    
     


</head>
<body class="container" background="img/descarga2.jpg">
   
    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Alta de nuevo Producto.</h5>
    </div>     

    <!-- Formulario -->
    <div class="container">
       <div class="row">
            <div class="col-3"></div>
            
            <div class="col-6" style="background-color:white ; padding:20px ; margin:60px; border-radius: 12px">
                <form action="alta_producto_sql.php" method="post">
                    <div class="form-group">
                        <label for="codigo">Ingrese el codigo.</label>
                        <input type="text" id="codigo" name="codigo" placeholder="Ingrese el codigo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Ingrese el producto.</label>
                        <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese la descripcion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="precio">Ingrese el precio.</label>
                        <input type="number" id="precio" name="precio" placeholder="Ingrese el precio" class="form-control">
                    </div> 
                    <div class="submit_container clear">
                        <button type="submit" class="formEmailButton">Cargar registro</button>
                        <br>
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
<?php } else header("Location: index.php"); ?>
</body>
</html>


