 <?php
        if(isset($_POST['nombreInstalacion'])){
            $nombreInstalacion = $_POST['nombreInstalacion'];
            $esInst = $_POST['esInstalacion'];
            $esModifi = $_POST['esModificar'];

            include("abrir_conexion.php");
             $resultado = mysqli_query($conexion,"SELECT id FROM instalacion WHERE nombre = '$nombreInstalacion'"); 
                        while($row = mysqli_fetch_array($resultado)){   
                            $id = $row['id'];
                            mysqli_query($conexion, "DELETE FROM instalacion WHERE id = '$id'");
                        }
                        echo "<meta http-equiv='refresh' content='0' URL='instalaciones.php'>";
            include("cerrar_conexion.php");
        }
    ?>