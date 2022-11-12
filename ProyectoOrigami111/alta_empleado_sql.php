<?php
    session_start();
    include 'include/Menu.php';
    include 'include/conexion.php';

    if ((isset($_SESSION['login']))) {

    // Recibo los valores del formulario
    $p_nombre = $_POST['nombre'];
    $p_apellido = $_POST['apellido'];
    $p_fnac = $_POST['fnac'];
    $p_dni = $_POST['dni'];
    $p_tel = $_POST['tel'];
    $p_email = $_POST['email'];
    $p_clave = $_POST['clave'];
    $p_sueldo = $_POST['sueldo'];
    $p_cargo = "Docente";
    $p_rol = 2;

   /*
    // Verificamos si el codigo existe en la base de datos.
    $consulta1 = "SELECT count(idDatosContacto) as nuevo from datos_bys where idDatosContacto = '$p_idDatosContacto' ";   
    $resultado1 = mysqli_query($conexion,$consulta1);
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
    // Estructura de decision
    if($existe==1){
        header("Location: alta_empleado.php?mensaje=uno");
    }else{
        */
        $alta = "INSERT INTO datos_contacto (id, nombre, apellido, fecha_nac, dni, num_tel, email, password, sueldo,cargo, rol, vigente) VALUES (NULL,'$p_nombre','$p_apellido','$p_fnac','$p_dni','$p_tel','$p_email','$p_clave','$p_sueldo','$p_cargo','$p_rol','1')";
        $resultado_alta = mysqli_query($conexion,$alta);

        echo "<script languaje='javascript' type='text/javascript'>
            window.opener.document.location.reload();
            self.close()
        </script>";

        echo "<script languaje='javascript' type='text/javascript'>
            window.close()
         </script>";
 }
 else header("Location: index.php");   
?>