<?php session_start();
    include 'include/Menu.php';
    include 'include/conexion.php';

    if ((isset($_SESSION['login']))) { 

    // Recibo los valores del formulario.
    $p_codigo = $_POST['codigo'];
    $p_descripcion = $_POST['descripcion'];
    $p_precio = $_POST['precio'];
    $p_boton = $_POST['boton'];

    // Estructura de desicion
    if($p_boton==0){
        echo "<script languaje='javascript' type='text/javascript'>
        window.close()
        </script>";
    }else{
        //baja LOGICA vigente=0
        $baja = "
            update datos_bys
            set vigente ='0'
            where codigo='$p_codigo'
        ";
        $resultado_baja = mysqli_query($conexion,$baja);

        echo "<script languaje='javascript' type='text/javascript'>
            window.opener.document.location.reload();
            self.close()
        </script>";

        echo "<script languaje='javascript' type='text/javascript'>
            window.close()
         </script>";

    }
}   else header("Location: index.php");

?>