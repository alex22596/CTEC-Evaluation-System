<?php
	// Parametros a configurar para la conexion de la base de datos
	$host = "localhost";    // sera el valor de nuestra BD
	$basededatos = "dbCtec";    // sera el valor de nuestra BD
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD

	//error_reporting(1); //No me muestra errores

	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>
