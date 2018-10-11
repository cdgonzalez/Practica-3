<?php

	$user = $_POST['usernamesignup'];
    $nombre = $_POST['namesignup'];
    $pass = $_POST['passwordsignup'];
    $pass2 = $_POST['passwordsignup_confirm'];
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

        if( $pass === $pass2){
            $consulta = "INSERT INTO users (nombre, usuario, password) VALUES ('$nombre','$user','$pass');";
            echo $consulta;

            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            header ('Location: index.php');
        }else{

            echo'<script type="text/javascript">
                    alert("Las contraseñas no coinciden, revisala porfavor");
                    window.location.href="index.php";
                </script>';

        }
?>
