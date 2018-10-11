<?php

	$v1 = $_POST['username'];
    $v2 = $_POST['password'];
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "usuarios_hotel";

	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM users WHERE usuario = '$v1' AND password = '$v2';";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	if($resultado->num_rows > 0){
        echo $consulta;

        header("Location: Reservaciones.php");

    }
    else{
        header("Location: index.php");
    }
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>
