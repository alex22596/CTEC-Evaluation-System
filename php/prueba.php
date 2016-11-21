 <?php
        if(isset($_POST['nombreInstalacion'])){
            $nombreInstalacion = $_POST['nombreInstalacion'];
            $nombreServ = $_POST['nombreServicio'];
            $esInst = $_POST['esInstalacion'];
            $esModifi = $_POST['esModificar'];
            if(($esInst == "true")&&($esModifi == "false")){
                include("abrir_conexion.php");
                $resultado = mysqli_query($conexion,"SELECT id FROM instalacion WHERE nombre = '$nombreInstalacion'"); 
                while($row = mysqli_fetch_array($resultado)){   
                    $id = $row['id'];
                    $resultadoI = mysqli_query($conexion,"SELECT id FROM servicios  WHERE instalacion_id = '$id'");
                    while($rowI = mysqli_fetch_array($resultadoI)){
                        $idSer = $rowI['id'];
                        mysqli_query($conexion, "DELETE FROM servicios where id = '$idSer'");
                    } 
                    $resultadoII = mysqli_query($conexion,"SELECT id FROM evaluacion  WHERE instalacion_id = '$id'");
                    while($rowII = mysqli_fetch_array($resultadoII)){
                        $idEva = $rowII['id'];
                        $resultadoIII = mysqli_query($conexion,"SELECT id FROM respuesta  WHERE evaluacion_id = '$idEva'");
                        while($rowIII = mysqli_fetch_array($resultadoIII)){
                            $idRes = $rowIII['id'];
                            mysqli_query($conexion, "DELETE FROM respuesta where id = '$idRes'");
                        }
                        mysqli_query($conexion, "DELETE FROM evaluacion where id = '$idEva'");
                    }
                    mysqli_query($conexion, "DELETE FROM instalacion WHERE id = '$id'");
                }
                include("cerrar_conexion.php");
            }
            else if(($esInst == "false")&&($esModifi == "false")){
                include("abrir_conexion.php");
                $resultado = mysqli_query($conexion,"SELECT id FROM instalacion WHERE nombre = '$nombreInstalacion'"); 
                while($row = mysqli_fetch_array($resultado)){   
                    $id = $row['id'];
                    $resultadoI = mysqli_query($conexion,"SELECT id FROM servicios  WHERE instalacion_id = '$id' && servicio = '$nombreServ'");
                    while($rowI = mysqli_fetch_array($resultadoI)){
                        $idSer = $rowI['id'];
                        mysqli_query($conexion, "DELETE FROM servicios where id = '$idSer'");
                    } 
                }
                include("cerrar_conexion.php");
            }
            header("refresh:0; url=instalaciones.php");
        }
    ?>