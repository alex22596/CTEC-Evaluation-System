<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Evaluación | CTEC Evaluation System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/lightbox.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/functionality.js">

    </script>
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../images/logo1.png">
</head>
<!--/head-->

<body>
    <div class="page-wrap">
        <header id="header">
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand">
                            <h1><img src="../images/logo1.png" alt="logo"></h1>
                        </a>
                    </div>
                </div>
        </header>
        <!--/#header-->
        <section>
            <div class="container">
                <?php
                    include("abrir_conexion.php");
                    $contador = 0;
                    $contadorServicios = 0;
                    $resultado = mysqli_query($conexion,"SELECT DISTINCT instalacion_id,nombre FROM instalacion INNER JOIN evaluacion ON evaluacion.instalacion_id = instalacion.id WHERE evaluacion.instalacion_id = 43");
                    while($row = mysqli_fetch_array($resultado)){                    
                        $idInsta =  $row['instalacion_id']; 
                        $resultadoI = mysqli_query($conexion,"SELECT * FROM evaluacion INNER JOIN instalacion ON instalacion.id = evaluacion.instalacion_id INNER JOIN pregunta ON pregunta.id = evaluacion.pregunta_id where evaluacion.instalacion_id = '$idInsta'&& evaluacion.pregunta_id = pregunta.id");
                        while($rowI = mysqli_fetch_array($resultadoI)){
                            $idPregu = $rowI['pregunta_id'];
                            $contenido = $rowI['contenido'];
                            $tipo = $rowI['tipo'];
                            $contador+=1;
                            $contador2 = strval($contador);
                            ?>
                            <script> 
                            $(function(){
                                $("#container").prepend('<div id="prueba'+'<?php echo $contador2;?>'+'" class="row"></div>'); 
                                $('#prueba'+'<?php echo $contador2;?>'+'').append('<div id="instalacion'+'<?php echo $contador2;?>'+'" class="row"></div>'); 
                                $('#instalacion'+'<?php echo $contador2; ?>'+'').append('<div class="col-md-4"><h2 id="nombreInstalacion'+'<?php echo $contador2;?>'+'">'+'<?php echo $contenido; ?>'+'</h2></div>'); 
                                $('#prueba'+'<?php echo $contador2; ?>'+'').append('<div id="servicios'+'<?php echo $contador2;?>'+'" class="row"></div>');   
                            });
                            </script>
                            <?php
                            $resultadoII = mysqli_query($conexion,"SELECT opcion  FROM opciones INNER JOIN pregunta ON pregunta.id = opciones.pregunta_id WHERE pregunta.id = '$idPregu'");
                            while($rowII = mysqli_fetch_array($resultadoII)){
                                $contadorServicios+=1;
                                $contadorServiciosString = strval($contadorServicios);
                                ?>
                                <script> 
                                    $(function(){
                                        $('#servicios'+'<?php echo $contador2; ?>'+'').append('<div id="containerServicios'+'<?php echo $contadorServiciosString;?>'+'" class="row"></div>'); 
                                        $('#containerServicios'+'<?php echo $contadorServiciosString; ?>'+'').append('<div class="col-md-4"><h3 id="nombreServicio'+'<?php echo $contadorServiciosString;?>'+'">'+'&emsp;&emsp;<?php echo $rowII['opcion'];?>'+'</h3></div>'); 
                                    });
                                </script>   
                                <?php
                            }
                            //$contador+=1;
                            //$contador2 = strval($contador);
                            /*?>
                            <script> 
                            $(function(){
                                $("#container").prepend('<div id="prueba'+'<?php echo $contador2;?>'+'" class="row"></div>'); 
                                $('#prueba'+'<?php echo $contador2;?>'+'').append('<div id="instalacion'+'<?php echo $contador2;?>'+'" class="row"></div>'); 
                                $('#instalacion'+'<?php echo $contador2; ?>'+'').append('<div class="col-md-4"><h2 id="nombreInstalacion'+'<?php echo $contador2;?>'+'">'+'<?php echo $contenido; ?>'+'</h2></div>'); 
                                $('#prueba'+'<?php echo $contador2; ?>'+'').append('<div id="servicios'+'<?php echo $contador2;?>'+'" class="row"></div>');   
                            });
                            </script>
                            <?php*/
                        }
                        
                    }
                ?>
                <div id="container" class="container"></div>
                
            </div>
        </section>
        </div>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right">
                            <p>&copy Todos los derechos reservados 2016</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/lightbox.min.js"></script>
        <script type="text/javascript" src="../js/wow.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>