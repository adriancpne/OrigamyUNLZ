<?php
session_start();
    include 'include/Menu.php';
    include 'include/conexion.php';

    // Recibo los valores del formulario.
    $p_idContacto = $_POST['idContacto'];
    $p_becado = $_POST['becado'];
    $p_boton = $_POST['boton'];

    // Estructura de desicion
    if($p_boton==0){
        echo "<script languaje='javascript' type='text/javascript'>
        window.close()
        </script>";
    }else{
        //baja LOGICA vigente=0
        $baja = "
            update datos_contacto
            set vigente ='0'
            where id='$p_idContacto'
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

?>