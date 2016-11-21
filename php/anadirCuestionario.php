<?php
    if(isset($_POST['nombreInst'])){
        $idInstalacion = $_POST['nombreInst'];
        $listaPreguntasStringId = $_POST['listaPreg'];
        $arrayListaPreguntasId = explode(",", $listaPreguntasStringId);
        echo $idInstalacion;
        foreach ($arrayListaPreguntasId as $valor)
            echo $valor;
    }
?>