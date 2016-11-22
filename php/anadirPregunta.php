<?php
    if(isset($_POST['contenidoPreg'])){
        $contenidoPregunta = $_POST['contenidoPreg'];
        $tipoPregunta = $_POST['tipoPreg'];
        $listaOpcString = $_POST['listaOpcString'];
        $listaOpcionesArray =  explode(",", $listaOpcString);
        include("abrir_conexion.php");
        mysqli_query($conexion, "INSERT INTO pregunta (contenido,tipo) VALUES ('$contenidoPregunta','$tipoPregunta')");
        $resultado = mysqli_query($conexion, "SELECT id FROM pregunta WHERE contenido = '$contenidoPregunta'");
        while($row = mysqli_fetch_array($resultado)){
            $id = $row['id'];
            foreach ($listaOpcionesArray as $valor){
                mysqli_query($conexion, "INSERT INTO opciones (opcion,pregunta_id) VALUES ('$valor','$id')");
            }
        }
        include("cerrar_conexion.php");
        header("refresh:0; url=instalaciones.php");
    }
?>