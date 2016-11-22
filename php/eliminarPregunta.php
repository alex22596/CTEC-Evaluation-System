<?php
    if(isset($_POST['nombrePreg'])){
        $nombrePregunta = $_POST['nombrePreg'];
        include("abrir_conexion.php");
        $resultado = mysqli_query($conexion,"SELECT id FROM pregunta WHERE contenido = '$nombrePregunta'"); 
        while($row = mysqli_fetch_array($resultado)){
            $id = $row['id'];
            $resultadoI = mysqli_query($conexion,"SELECT id FROM opciones WHERE pregunta_id = '$id'");
            while($rowI = mysqli_fetch_array($resultadoI)){
                $idOp = $rowI['id'];
                 mysqli_query($conexion, "DELETE FROM opciones WHERE id = '$idOp'");
            }
            $resultadoII = mysqli_query($conexion,"SELECT id FROM evaluacion WHERE pregunta_id = '$id'");
            while($rowII = mysqli_fetch_array($resultadoII)){
                $idEva = $rowII['id'];
                 mysqli_query($conexion, "DELETE FROM evaluacion WHERE id = '$idEva'");
            }
            mysqli_query($conexion, "DELETE FROM pregunta WHERE id = '$id'");
        }
        include("cerrar_conexion.php");
        header("refresh:0; url=instalaciones.php");
    }
?>