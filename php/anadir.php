<?php
    if(isset($_POST['nombreInst'])){
        $nombreInstalacion = $_POST['nombreInst'];
        $listaServiciosString = $_POST['listaServ'];
        $arrayListaServicios = explode(",", $listaServiciosString);
        echo $nombreInstalacion;
        foreach ($arrayListaServicios as $valor)
            echo $valor;
    }
?>