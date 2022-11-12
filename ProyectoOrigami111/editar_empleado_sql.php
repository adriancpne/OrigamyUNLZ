<?php
    session_start();
      include 'include/Menu.php';
      include 'include/conexion.php'; 

    if ((isset($_SESSION['login']))) {

    // Recibo los valores del formulario.
    $p_idDatosContacto = $_POST['idDatosContacto'];
    $p_cargo = $_POST['cargo'];
    $p_sueldo = $_POST['sueldo'];
    $p_boton = $_POST['boton'];

    // Estructura de desicion
    if($p_boton==0){
        echo "<script languaje='javascript' type='text/javascript'>
        window.close()
        </script>";
    }else{
        $editar = "
            update datos_contacto
            set cargo='$p_cargo',sueldo='$p_sueldo'
            where id='$p_idDatosContacto'";
        $resultado_editar = mysqli_query($conexion,$editar);

        echo "<script languaje='javascript' type='text/javascript'>
            window.opener.document.location.reload();
            self.close()
        </script>";

        echo "<script languaje='javascript' type='text/javascript'>
            window.close()
         </script>";
    }

} else header("Location: index.php"); ?>



?>