<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Cuestionarios | CTEC Evaluation System</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/animate.min.css" rel="stylesheet">
        <link href="../css/lightbox.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="../js/functionality.js"></script>
    </head>
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
                        <form method = "POST">
                        <div class="container">
                            
                        </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <select name="OS1" class="form-control" id="seleccionarInstalacion">
                                        <option value="0">Escoja la Instalación</option>
                                        <?php
                                            include("abrir_conexion.php");
                                            $resultado = mysqli_query($conexion,"SELECT * FROM instalacion");
                                            while($row = mysqli_fetch_array($resultado)){
                                                echo "<option value='".$row['id']."'>";
                                                echo $row['nombre'];
                                                echo "</option>";
                                            }
                                            include("cerrar_conexion.php");
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-xs-6">
                                    <div class="form-group">
                                        <select name="OS2" class="form-control" id="seleccionarPregunta">
                                            <option value="0">Escoja la Pregunta</option>
                                            <?php
                                                include("abrir_conexion.php");
                                                $resultado = mysqli_query($conexion,"SELECT * FROM pregunta");
                                                while($row = mysqli_fetch_array($resultado)){
                                                    echo "<option value='".$row['id']."'>";
                                                    echo $row['contenido'];
                                                    echo "</option>";
                                                }
                                                include("cerrar_conexion.php");
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-6">
                                    <input type="button" class="btn btn-success" id="agregarPregunta" value="Agregar Pregunta"></button>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info" id="agregarCuestionario" value="Agregar Cuestionario"></button>
                        </form>
                        <script>
                            $(function(){
                                var listaPreguntas = [];
                                $( "#agregarPregunta" ).click(function() {
                                    var preguntaSeleccionada = $( "#seleccionarPregunta" ).val();
                                    if(!listaPreguntas.includes(preguntaSeleccionada)){
                                        listaPreguntas.push(preguntaSeleccionada); 
                                    }
                                    else{
                                        alert("Ya Se Agregó Esta Pregunta.");
                                    }
                                });
                                $( "#agregarCuestionario" ).click(function() {
                                    var instalacionSeleccionada = $( "#seleccionarInstalacion" ).val();
                                    var listaPreguntasString = listaPreguntas.toString(); // result: a,b,c
                                    $.ajax({
                                        url: "anadirCuestionario.php", // php file path
                                        type: "POST", // send data method
                                        data: ({nombreInst: instalacionSeleccionada, listaPreg: listaPreguntasString}),
                                        success: function(data){
                                            alert(data);
                                            
                                        } // response of ajax
                                    });
                                });

                            });
                        </script>
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