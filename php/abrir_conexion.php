<?php
	// Parametros a configurar para la conexion de la base de datos
	$host = "localhost";    // sera el valor de nuestra BD
	$basededatos = "feedbackctec";    // sera el valor de nuestra BD
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD

	//Lista de Tablas
	$tabla_db1 = "users"; 	   // tabla de usuarios
	$tabla_db2 = "instalacion";
	$tabla_db3 = "servicios";
	$tabla_db4 = "pregunta";
	$tabla_db5 = "opciones";
	$tabla_db6 = "evaluacion";
    $tabla_db7 = "reporte";

	//error_reporting(0); //No me muestra errores

	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>
