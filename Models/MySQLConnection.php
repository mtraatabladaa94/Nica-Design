<?php
	$server = "localhost";
	$user = "root";
	$pw = "";
	$bd = "dbPublicaciones";
	$mysqli= new mysqli($server, $user, $pw, $bd);
	$mysqli->set_charset("utf8");
	if(mysqli_connect_errno()){
		echo 'Conexion fallida:', mysqli_connect_error();
		exit();
	}
	// else
	// {
	//  	echo "Conexión exitosa";
	// }
?>