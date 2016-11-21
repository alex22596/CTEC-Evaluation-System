<?php
    if(isset($_POST['nombreInst'])){
        $idInstalacion = $_POST['nombreInst'];
        $listaPreguntasStringId = $_POST['listaPreg'];
        $arrayListaPreguntasId = explode(",", $listaPreguntasStringId);
        include("abrir_conexion.php");
        foreach ($arrayListaPreguntasId as $valor){
            mysqli_query($conexion,"INSERT INTO evaluacion (instalacion_id,pregunta_id) VALUES ('$idInstalacion','$valor')");
        }
        include("cerrar_conexion.php");
    }
?>