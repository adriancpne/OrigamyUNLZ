<?php
	session_start();
    include 'include/Menu.php';
    include 'include/conexion.php';

    if ((isset($_SESSION['login']))) {

    // Recibo los valores del formulario
    $p_codigo = $_POST['codigo'];
    $p_descripcion = $_POST['descripcion'];
    $p_precio = $_POST['precio'];
   
    // Verificamos si el codigo existe en la base de datos.
    $consulta1 = "SELECT count(codigo) as nuevo from datos_bys where codigo = '$p_codigo' ";   
    $resultado1 = mysqli_query($conexion,$consulta1);
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
    // Estructura de decision
    if($existe==1){
        header("Location: alta_producto.php?mensaje=uno");
    }else{
        $alta = "INSERT INTO datos_bys (id, codigo, descripcion, precio, vigente) VALUES (NULL,'$p_codigo','$p_descripcion','$p_precio','1')";
        $resultado_alta = mysqli_query($conexion,$alta);

        echo "<script languaje='javascript' type='text/javascript'>
            window.opener.document.location.reload();
            self.close()
        </script>";

        echo "<script languaje='javascript' type='text/javascript'>
            window.close()
         </script>";
    }
}else header("Location: index.php");
?>