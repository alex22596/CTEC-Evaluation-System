<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Instalaciones | CTEC Evaluation System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/lightbox.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <script src="../js/functionality.js"></script>
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
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">
                            <h1><img src="../images/logo1.png" alt="logo"></h1>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="../php/instalaciones.php">Instalaciones</a></li>
                            <li class="active"><a href="../php/cuestionarios.php">Cuestionarios</a></li>
                            <li class="active"><a href="../php/preguntas.php">Preguntas</a></li>
                            <li class="active"><a href="../php/respuestas.php">Respuestas</a></li>
                            <li class="active"><a href="#">Enviar Cuestionario</a></li>
                            <li class="active"><a href="#">Generar Reporte</a></li>
                            <li class="active"><a href="../php/login.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->
        <section>
            <div class="container">
                <div class="container center">
                    <form method="post">
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="nombreInst" placeholder="Ingresa el nombre de la Instalación">
                                </div>
                            </div>
                             <div class="row">
                                <div class="form-group col-md-10">
                                    <input type="text" class="form-control" id="nombreServicio" placeholder="Ingresa el nombre del servicio">
                                </div>
                                <div class= "col-md-2">
                                    <input type="button" class="btn btn-success" value="Añadir Servicio"  id="añadirServicio"> 
                                </div>   
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info" id="crearInstalacionBoton" value="Crear Instalación"></input>
                    </form>
                    <script>
                        $(function(){
                            var listaServicios = [];
                            $( "#añadirServicio" ).click(function() {
                                var nombreServicio = $("#nombreServicio").val(); 
                                listaServicios.push(nombreServicio); //anadir nuevos elementos.
                            });
                            $( "#crearInstalacionBoton" ).click(function() {
                                var nombreInst = $("#nombreInst").val(); 
                                var listaServiciosString = listaServicios.toString(); // result: a,b,c
                                //$('#nombreInstalacion').val('');
                                $.ajax({
                                    url: "anadir.php", // php file path
                                    type: "POST", // send data method
                                    data: ({nombreInst: nombreInst, listaServ: listaServiciosString}),
                                    success: function(data){
                                        
                                    } // response of ajax
                                });

                            });
                        });
                    </script>
                </div>
            <div>

                    <?php
                        include("abrir_conexion.php");
                        $contador = 0;
                        $resultado = mysqli_query($conexion,"SELECT * FROM instalacion"); 
                        while($row = mysqli_fetch_array($resultado)){   
                           $contador+=1;
                           $contador2 = strval($contador);              
                           $id =  $row['id'];
                           ?>
                           <script> 
                            $(function(){
                                $("#container").prepend('<div id="prueba'+'<?php echo $contador2;?>'+'" class="row"></div>'); 
                                $('#prueba'+'<?php echo $contador2;?>'+'').append('<div id="instalacion'+'<?php echo $contador2;?>'+'" class="row"></div>'); 
                                $('#instalacion'+'<?php echo $contador2; ?>'+'').append('<div class="col-md-4"><h2 id="nombreInstalacion'+'<?php echo $contador2;?>'+'">'+'<?php echo $row['nombre']; ?>'+'</h2></div>'); 
                                $('#instalacion'+'<?php echo $contador2; ?>'+'').append('<div class="col-md-4"><form method="post"><input type="image" src="../images/edit.png" name="modificarInstalacion'+'<?php echo $contador2;?>'+'"></form></div>'); 
                                $('#instalacion'+'<?php echo $contador2; ?>'+'').append('<div class="col-md-4"><form method="post"><input type="image" src="../images/delete.png" name="eliminarInstalacion'+'<?php echo $contador2;?>'+'"></form></div>');
                            });
                            </script>
                           <?php
                           $resultadoI = mysqli_query($conexion,"SELECT * FROM servicios Where instalacion_id = '".$id."' ");
                            while($rowI = mysqli_fetch_array($resultadoI)){ 
                                ?>
                                <script> 
                                    $(function(){
                                        $('#prueba'+'<?php echo $contador2; ?>'+'').append('<div id="servicio'+'<?php echo $contador2;?>'+'" class="row"></div>');   
                                        $('#servicio'+'<?php echo $contador2; ?>'+'').append('<div class="col-md-4"><h3 id="nombreServicio'+'<?php echo $contador2;?>'+'">'+'&emsp;&emsp;<?php echo $rowI['servicio'];?>'+'</h3></div>'); 
                                        $('#servicio'+'<?php echo $contador2; ?>'+'').append('<div class="col-md-4"><form method="post"><input type="image" src="../images/edit.png" name="modificarServicio'+'<?php echo $contador2;?>'+'"></form></div>'); 
                                        $('#servicio'+'<?php echo $contador2; ?>'+'').append('<div class="col-md-4"><form method="post"><input type="image" src="../images/delete.png" name="eliminarServicio'+'<?php echo $contador2;?>'+'"></form></div>');
                                    });
                                </script>
                            <?php
                            }
                        }
                        include("cerrar_conexion.php");
                    ?>
                </div>
                <div id="container" class="container"></div>
            </div>
            <script>
                $(document).ready(function() {
                    $('input[type="image"]').click(function() {
                        var buttonName = $(this).attr('name');
                        
                        var esInstalacion = buttonName.substring(0,buttonName.length -1);

                        var ultimoElemento = buttonName[buttonName.length-1];
                        
                        if(esInstalacion == "modificarInstalacion" || esInstalacion == "eliminarInstalacion"){
                            var concatenarNombreInstalacion = "#nombreInstalacion".concat(ultimoElemento);
                            var nombreInstalacion = $(concatenarNombreInstalacion).text(); 
                            if(buttonName[0] == "e"){
                                $.ajax({
                                    url: "prueba.php", // php file path
                                    type: "POST", // send data method
                                    data: ({nombreInstalacion: nombreInstalacion, esInstalacion: true, esModificar: false}),
                                    success: function(data){
                                          
                                    } // response of ajax
                                });
                            }
                            else{
                                $.ajax({
                                    url: "prueba.php", // php file path
                                    type: "POST", // send data method
                                    data: ({nombreInstalacion: nombreInstalacion, esInstalacion: true, esModificar: true}),
                                    success: function(data){
                                        
                                    } // response of ajax
                                });
                            }
                        }
                        else{
                            var concatenarNombreServicio = "#nombreServicio".concat(ultimoElemento);
                            var nombreServicio = $(concatenarNombreServicio).text(); 
                            var res = nombreServicio.replace("  ", "");
                            if(buttonName[0] == "e"){
                                $.ajax({
                                url: "prueba.php", // php file path
                                type: "POST", // send data method
                                data: ({nombreInstalacion: res, esInstalacion: false, esModificar: false}),
                                success: function(data){
                                     
                                } // response of ajax
                            });
                            }
                            else{
                                $.ajax({
                                url: "prueba.php", // php file path
                                type: "POST", // send data method
                                data: ({nombreInstalacion: res, esInstalacion: false, esModificar: true}),
                                success: function(data){
                                     
                                } // response of ajax
                            });
                            }
                        }
                    });
                });
            </script>
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