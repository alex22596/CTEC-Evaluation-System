<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Preguntas | CTEC Evaluation System</title>
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
    <?php
    $opciones = array();
    ?>
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
                <div class="container center" id="showCreateInstallation">
                    <form clas ="" method="POST" action="preguntas.php">
                        <div class="form-group">
                            <input type="name" class="form-control" id="contenidoPregunta" placeholder="Ingresa el Contenido de la Pregunta">
                        </div>
                        <div class="form-group">
                            <select  id ="tipoPregunta" class="form-control">
                                <option>Escoja el tipo de pregunta</option>
                                <option>Seleccion Unica</option>
                                <option>Seleccion Multiple</option>
                                <option>Escala</option>
                            </select>
                        </div>
                         <div class="row" id="op" hidden>
                                <div class="form-group col-md-10">
                                    <input type="text" class="form-control" id="opcionesPregunta" placeholder="Ingrese Opciones">
                                </div>
                                <div class= "col-md-2">
                                    <input type="button" class="btn btn-success" value="Añadir opcion"  id="añadirOpción"> 
                                </div>   
                            </div>
                        <input type="button" class="btn btn-info" id ="crearPregunta" value="Crear Pregunta"></input>
                    </form>
                    <script>
                        $(function(){
                            var listaOpciones = [];

                            $('#tipoPregunta').change(function(){
                                var tipoPregunta = $("#tipoPregunta").val();
                                if(tipoPregunta != "Seleccion Unica" && tipoPregunta != "Seleccion Multiple"){
                                    $( "#op" ).hide();
                                }
                                else{
                                     $( "#op" ).show();
                                }

                            });
                            $( "#añadirOpción" ).click(function() {
                                var opcionesPregunta = $("#opcionesPregunta").val(); 
                                if(listaOpciones.length < 4 && opcionesPregunta.length != 0){
                                    listaOpciones.push(opcionesPregunta); //anadir nuevos elementos.
                                }
                                else  if(listaOpciones.length < 4 && opcionesPregunta.length == 0){
                                    alert("Debe de Ingresar una Opción.");
                                }
                                else{
                                    alert("No Puede Ingresar Más de 4 Opciones.");
                                }
                                $("#opcionesPregunta").val('');
                            });
                            $( "#crearPregunta" ).click(function() {
                                var tipoPregunta = $("#tipoPregunta").val();
                                var contenidoPregunta = $("#contenidoPregunta").val();
                                if(contenidoPregunta.length == 0){
                                    alert("Debe de Ingresar el Contenido de la Pregunta.")
                                }
                                else{
                                    if((tipoPregunta == "Seleccion Unica" || tipoPregunta == "Seleccion Multiple") && 
                                        (listaOpciones.length == 4)){
                                        var listaOpcionesString = listaOpciones.toString(); // result: a,b,c    
                                        $.ajax({
                                            url: "anadirPregunta.php", // php file path
                                            type: "POST", // send data method
                                            data: ({contenidoPreg: contenidoPregunta, tipoPreg: tipoPregunta, listaOpcString: listaOpcionesString}),
                                            success: function(data){
                                                alert(data);
                                            } // response of ajax
                                        });
                                    }
                                    else if((tipoPregunta == "Seleccion Unica" || tipoPregunta == "Seleccion Multiple") && 
                                        (listaOpciones.length != 4)){
                                            alert("Debe de Ingresar 4 Opciones.");
                                    }
                                    else if(tipoPregunta == "Escoja el tipo de pregunta"){
                                        alert("Debe de Escoger el Tipo de Pregunta.");
                                    }
                                    else if(tipoPregunta == "Escala"){
                                        var listaEscala = "1,2,3,4,5";
                                        $.ajax({
                                            url: "anadirPregunta.php", // php file path
                                            type: "POST", // send data method
                                            data: ({contenidoPreg: contenidoPregunta, tipoPreg: tipoPregunta, listaOpcString: listaEscala}),
                                            success: function(data){
                                                 alert(data);
                                                
                                            } // response of ajax
                                        });
                                    }
                                }
                            });
                        });
                    </script>
                </div>
                <div>
                    <?php
                        include("abrir_conexion.php");
                        $resultado = mysqli_query($conexion,"SELECT * FROM pregunta");
                        while($row = mysqli_fetch_array($resultado)){                    
                           $id =  $row['id'];
                           ?>
                           <script> 
                            $(function(){
                                $("#container").append('<div class="col-md-4">'+ '<?php echo $row['contenido']; ?>'+'</div>'); 
                                $("#container").append('<div class="col-md-4"><input type="submit" class="btn btn-success" value="Modificar" name="btnIniciar"></div>'); 
                            $("#container").append('<div class="col-md-4"><input type="submit" class="btn btn-danger" value="Eliminar" name="btnIniciar"></div>');
                            });
                            </script>
                           <?php
                           $resultadoI = mysqli_query($conexion,"SELECT * FROM opciones Where pregunta_id = '".$id."' ");
                            while($rowI = mysqli_fetch_array($resultadoI)){ 
                                ?>
                                <script> 
                                    $(function(){
                                        $("#container").append('<div class="col-md-4">'+ '<?php echo $rowI['opcion']; ?>'+'</div>'); 
                                        $("#container").append('<div class="col-md-4"><input type="submit" class="btn btn-success" value="Modificar" name="btnIniciar"></div>'); 
                                    $("#container").append('<div class="col-md-4"><input type="submit" class="btn btn-danger" value="Eliminar" name="btnIniciar"></div>');
                                    });
                                    </script>
                                <?php
                            }
                        }
                        include("cerrar_conexion.php");
                    ?>
                </div>
                <div id="container">

                </div>
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