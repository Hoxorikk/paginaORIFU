<?php
	$nombre= $_GET["nombre"];
	$apellido = $_GET["apellido"];
    $correo = $_GET["correo"];
    $telefono = $_GET["telefono"];
    $dni = $_GET["dni"];
    $contraseña = $_GET["contraseña"];
    $servername = "127.0.0.1";
    $database = "inicio_sesion";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        $resultado=mysqli_query($conexion,"insert into cliente values('$nombre','$apellido','$correo','$telefono','$dni','$contraseña');");
        //seleccionamos todas las filas que haya en usuarios
        
       echo "<a href='otra_pagina.php'>Volver a inicio</a>";
    }
    mysqli_close($conexion);
?>
