<?php

    session_start();
    include 'include/Menu.php';
    include 'include/conexion.php'; 

     if ((isset($_SESSION['login']))) {

    // Recibo los valores del formulario.
    $p_idContacto = $_POST['id_datos_contacto'];
    $p_becado = $_POST['becado'];
     $p_boton = $_POST['boton'];

     if ($p_becado == 'si'){
        $p_becado = true;
     }else $p_becado = false;

    // Estructura de desicion
    if($p_boton==0){
        echo "<script languaje='javascript' type='text/javascript'>
        window.close()
        </script>";
    }else{
        $editar = "
            update datos_contacto
            set becado='$p_becado' WHERE id ='$p_idContacto' ";
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