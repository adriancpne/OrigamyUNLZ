<?php
    session_start();
    include 'include/Menu.php';
    include 'include/conexion.php';

    if (!(isset($_SESSION['login']))) {

    $p_email = $_POST['correo'];
    $p_mensaje = $_POST['mensaje'];

    $alta = "INSERT INTO mensajes (id,email,mensaje,fecha,leido) VALUES
    (NULL,'$p_email','$p_mensaje',CURRENT_TIME(),'false')";

    $resultado_alta = mysqli_query($conexion,$alta);
    header("Location: contacto.php");  

    } else header("Location: index.php");