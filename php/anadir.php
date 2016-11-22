<?php
    if(isset($_POST['nombreInst'])){
        $nombreInstalacion = $_POST['nombreInst'];
        $listaServiciosString = $_POST['listaServ'];
        $arrayListaServicios = explode(",", $listaServiciosString);
        include("abrir_conexion.php");
        mysqli_query($conexion, "INSERT INTO instalacion (nombre) VALUES ('$nombreInstalacion')");
        $resultado = mysqli_query($conexion, "SELECT id FROM instalacion WHERE nombre = '$nombreInstalacion'");
        while($row = mysqli_fetch_array($resultado)){
            $id = $row['id'];
            foreach ($arrayListaServicios as $valor){
                mysqli_query($conexion, "INSERT INTO servicios (servicio,instalacion_id) VALUES ('$valor','$id')");
            }               
        }
        include("cerrar_conexion.php");
        header("refresh:0; url=instalaciones.php");
    }
?>