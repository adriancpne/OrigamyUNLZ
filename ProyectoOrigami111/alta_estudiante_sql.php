<?php
session_start();
    include 'include/Menu.php';
    include 'include/conexion.php';

    if ((isset($_SESSION['login']))) {    // Recibo los valores del formulario
    $p_nombre = $_POST['nombre'];
    $p_apellido = $_POST['apellido'];
    $p_fnac = $_POST['fnac'];
    $p_dni = $_POST['dni'];
    $p_tel = $_POST['tel'];
    $p_email = $_POST['email'];
    $p_becado = $_POST['becado'];

    if($p_becado == 'si'){
        $p_becado = true;
    }else $p_becado = false;

    $p_rol = 3;


       
    // Verificamos si el DNI existe en la base de datos.
    $consulta1 = "SELECT count(dni) as nuevo from datos_contacto where dni = '$p_dni' ";   
    $resultado1 = mysqli_query($conexion,$consulta1);

   
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de decision
    if($existe==1){
        header("Location: alta_estudiante.php?mensaje=uno");
    }else{
        $alta = "INSERT INTO datos_contacto (id,nombre,apellido,fecha_nac,dni,num_tel,email,rol,vigente,becado) VALUES (NULL,'$p_nombre','$p_apellido','$p_fnac','$p_dni','$p_tel','$p_email','$p_rol','1','$p_becado')";
        $resultado_alta = mysqli_query($conexion,$alta);

        echo "<script languaje='javascript' type='text/javascript'>
            window.opener.document.location.reload();
            self.close()
        </script>";

        echo "<script languaje='javascript' type='text/javascript'>
            window.close()
         </script>";
    }
}else header("Location: index.php"); ?>