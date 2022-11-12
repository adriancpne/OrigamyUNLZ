<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <!-- ARCHIVO CON ESTILOS ONLINE-->
    <?php include 'Include/bootsrap.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Archivos a incluir -->
<?php 
session_start();
include 'include/Menu.php';
if (isset($_SESSION['login'])) {?>

</head>
<body class="container" background="img/descarga2.jpg" >
    
    <div class="container"> 
        <?php menu(); ?>
        <div>

    <?php
    
    include('include/conexion.php'); 

    if (isset($_SESSION['login'])){
    session_destroy();
    ?>
            <div class="alert alert-info">
              <p>SESION CERRADA</p>
            </div>
        <?php
    }
     header("Location: index.php");
    ?>
        
        </div>  
    </div>
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php } else header("Location: index.php"); ?>
</body>
</html>






