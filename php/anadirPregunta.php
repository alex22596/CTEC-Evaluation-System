<?php
    if(isset($_POST['contenidoPreg'])){
        $contenidoPregunta = $_POST['contenidoPreg'];
        $tipoPregunta = $_POST['tipoPreg'];
        $listaOpcString = $_POST['listaOpcString'];
        $listaOpcionesArray =  explode(",", $listaOpcString);

        echo  $contenidoPregunta;
        echo  $tipoPregunta;
        foreach ($listaOpcionesArray as $valor){
            echo $valor;
        }
    }
?>