<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$cnx = mysqli_connect("localhost","usuario","password", "catalogo")
    or die("Error en la conexion a MYSQL");
    //echo "conexion exitosa";

    //comprueba la conexion
    if(mysqli_connect_errno()){
        printf("connect failed: %s\n",mysqli_connect_error());
        exit();
    }

/* //2 manera de conectar a la bd 
$mysqli = new mysqli('localhost', 'usuario', 'password', 'catalogo');

echo "conexion exitosa";

	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}*/
?>